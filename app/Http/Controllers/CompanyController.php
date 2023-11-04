<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Company;

class CompanyController extends Controller
{
    public function addView () {
        return view('cmsWorkingCompaniesAddContent');
    }

    public function editView ($id) {
        $data = Company::find($id);
        if ($data) {
            return view('cmsWorkingCompaniesEditContent', ['data' => $data]);
        }
        return redirect('/cmsWorkingCompanies');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        try {
            return response() -> json ([
                'success' => true,
                'data' => $company,
            ]);
        } catch (\Exception $e) {
            return response() -> json ([
                'success' => false,
                'data' => null,
                'message' => $e -> getMessage(),
            ]);
        }
    }

    public function all(Request $request)
    {
        $data = Company::latest() -> paginate(10);
        if ($request -> search) {
            $search = '%' . $request -> search . '%';
            $data = Company::latest() -> where('name', 'like', $search) -> paginate(10);
        }
        $test = ['data' => []];

        if ($data -> isNotEmpty()) {
            foreach ($data as $item) {
                $temp = [
                    'id' => $item -> id,
                    'name' => $item -> name,
                ];
                array_push($test['data'], $temp);
            }
        }

        return view('cmsWorkingCompanies', ['data' => $data, 'test' => $test, 'varSearch' => $request -> search]);
    }

    public function store(Request $request)
    {
        try {
            $item = $request -> validate([
                'name' => ['required'],
                'image' => ['required'],
            ]);
            $image = $request -> file('image') -> store('companyImages');
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        $item['image'] = $image;
        $item['author'] = auth() -> user() -> email;

        try {
            Company::create($item);
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data') -> withInput( $request->except('password') );
        }
        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsWorkingCompanies');
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        if (!$company) {
            return redirect('/cmsWorkingCompanies');
        }

        try {
            $item = $request -> validate([
                'name' => ['required'],
                // 'image' => ['required'],
            ]);
            $image = NULL;
            if ($request -> file('image')) {
                $image = $request -> file('image') -> store('companyImages');
            }
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        if ($image) {
            $item['image'] = $image;
            Storage::delete($company -> image);
        }

        $item['author'] = auth() -> user() -> email;

        $company -> update($item);

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsWorkingCompanies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        if (!$company) {
            return response() -> json ([
                'status' => false,
            ]);
        }
        try {
            Storage::delete($company -> image);
            $company -> update(['author' => auth() -> user() -> email]);
            $company -> delete();
            return response() -> json ([
                'status' => true,
            ]);
        } catch (\Exception $e) {
            return response() -> json ([
                'status' => false,
            ]);
        }
    }
}