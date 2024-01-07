<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Organigram;

class OrganigramController extends Controller
{
    public function addView () {
        return view('cmsOrganigramAdd');
    }

    public function editView ($id) {
        $data = Organigram::find($id);
        if ($data) {
            return view('cmsOrganigramEdit', ['data' => $data]);
        }
        return redirect('/cmsOrganigram');
    }

    public function store(Request $request)
    {
        try {
            $item = $request -> validate([
                'name' => ['required'],
                'position' => ['required'],
                'image' => ['required'],
            ]);
            $image = $request -> file('image') -> store('organigramImages');
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        $item['image'] = $image;
        $item['author'] = auth() -> user() -> email;

        try {
            Organigram::create($item);
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data') -> withInput( $request->except('password') );
        }

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsOrganigram');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $organigram)
    {
        try {
            return response() -> json ([
                'success' => true,
                'data' => $organigram,
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
        $data = Organigram::latest() -> paginate(10);
        
        if ($request -> search) {
            $search = '%' . $request -> search . '%';
            $data = Organigram::latest() -> where('name', 'like', $search) -> orWhere('position', 'like', $search) -> paginate(10);
        }

        $test = ['data' => []];
        
        if ($data -> isNotEmpty()) {
            foreach ($data as $item) {
                $temp = [
                    'id' => $item -> id,
                    'name' => $item -> name,
                    'position' => $item -> position,
                ];
                array_push($test['data'], $temp);
            }
        }

        return view('cmsOrganigram', ['data' => $data, 'test' => $test, 'varSearch' => $request -> search]);
    }

    public function update(Request $request, $id)
    {
        $organigram = Organigram::find($id);

        if (!$organigram) {
            return redirect('/cmsOrganigram');
        }

        try {
            $item = $request -> validate([
                'name' => ['required'],
                'position' => ['required'],
                // 'image' => ['required'],
            ]);
            $image = NULL;
            if ($request -> file('image')) {
                $image = $request -> file('image') -> store('organigramImages');
            }
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        if ($image) {
            $item['image'] = $image;
            Storage::delete($organigram -> image);
        }

        $item['author'] = auth() -> user() -> email;

        $organigram -> update($item);

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsOrganigram');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $organigram = Organigram::find($id);
        if (!$organigram) {
            return response() -> json ([
                'status' => false,
            ]);
        }

        try {
            Storage::delete($organigram -> image);
            $organigram -> update(['author' => auth() -> user() -> email]);
            $organigram -> delete();
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
