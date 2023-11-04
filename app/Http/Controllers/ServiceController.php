<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Service;

class ServiceController extends Controller
{
    public function addView () {
        return view('cmsServicesAddContent');
    }

    public function editView ($id) {
        $data = Service::find($id);
        if ($data) {
            return view('cmsServicesEditContent', ['data' => $data]);
        }
        return redirect('/cmsServices');
    }

    public function store(Request $request)
    {
        try {
            $item = $request -> validate([
                'name' => ['required'],
                'description' => ['required'],
                'image' => ['required'],
            ]);
            $image = $request -> file('image') -> store('serviceImages');
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        $item['image'] = $image;
        $item['author'] = auth() -> user() -> email;

        try {
            Service::create($item);
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data') -> withInput( $request->except('password') );
        }

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsServices');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        try {
            return response() -> json ([
                'success' => true,
                'data' => $service,
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
        $data = Service::latest() -> paginate(10);
        
        if ($request -> search) {
            $search = '%' . $request -> search . '%';
            $data = Service::latest() -> where('name', 'like', $search) -> orWhere('description', 'like', $search) -> paginate(10);
        }

        $test = ['data' => []];
        
        if ($data -> isNotEmpty()) {
            foreach ($data as $item) {
                $temp = [
                    'id' => $item -> id,
                    'name' => $item -> name,
                    'description' => $item -> description,
                ];
                array_push($test['data'], $temp);
            }
        }

        return view('cmsServices', ['data' => $data, 'test' => $test, 'varSearch' => $request -> search]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);

        if (!$service) {
            return redirect('/cmsServices');
        }

        try {
            $item = $request -> validate([
                'name' => ['required'],
                'description' => ['required'],
                // 'image' => ['required'],
            ]);
            $image = NULL;
            if ($request -> file('image')) {
                $image = $request -> file('image') -> store('serviceImages');
            }
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        if ($image) {
            $item['image'] = $image;
            Storage::delete($service -> image);
        }

        $item['author'] = auth() -> user() -> email;

        $service -> update($item);

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsServices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response() -> json ([
                'status' => false,
            ]);
        }

        try {
            Storage::delete($service -> image);
            $service -> update(['author' => auth() -> user() -> email]);
            $service -> delete();
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
