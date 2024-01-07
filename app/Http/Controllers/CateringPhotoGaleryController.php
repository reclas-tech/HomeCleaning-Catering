<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\CateringPhotoGalery;

class CateringPhotoGaleryController extends Controller
{
    public function addView () {
        return view('cmsCateringPhotoAdd');
    }

    public function editView ($id) {
        $data = CateringPhotoGalery::find($id);
        if ($data) {
            return view('cmsCateringPhotoEdit', ['data' => $data]);
        }
        return redirect('/cmsCateringPhoto');
    }


    public function store(Request $request)
    {
        try {
            $item = $request -> validate([
                'image' => ['required'],
            ]);
            $image = $request -> file('image') -> store('cateringPhotoGaleryImages');
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        $item['image'] = $image;
        $item['author'] = auth() -> user() -> email;

        try {
            CateringPhotoGalery::create($item);
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data') -> withInput( $request->except('password') );
        }

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsCateringPhoto');
    }

    /**
     * Display the specified resource.
     */
    public function show(CateringPhotoGalery $cateringPhotoGalery)
    {
        try {
            return response() -> json ([
                'success' => true,
                'data' => $cateringPhotoGalery,
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
        $data = CateringPhotoGalery::latest() -> paginate(10);
        if ($request -> search) {
            $search = '%' . $request -> search . '%';
            $data = CateringPhotoGalery::latest() -> where('image', 'like', $search) -> paginate(10);
        }

        $test = ['data' => []];

        if ($data -> isNotEmpty()) {
            foreach ($data as $item) {
                $temp = [
                    'id' => $item -> id,
                    'image' => $item -> image,
                ];
                array_push($test['data'], $temp);
            }
        }

        return view('cmsCateringPhoto', ['data' => $data, 'test' => $test, 'varSearch' => $request -> search]);
    }

    public function update(Request $request, $id)
    {
        $cateringPhotoGalery = CateringPhotoGalery::find($id);

        if (!$cateringPhotoGalery) {
            return redirect('/cmsCateringPhoto');
        }

        try {
            $item = $request -> validate([
                'image' => ['required'],
            ]);
            $image = NULL;
            if ($request -> file('image')) {
                $image = $request -> file('image') -> store('cateringPhotoGaleryImages');
            }
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        if ($image) {
            $item['image'] = $image;
            Storage::delete($cateringPhotoGalery -> image);
        }

        $item['author'] = auth() -> user() -> email;

        $cateringPhotoGalery -> update($item);

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsCateringPhoto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cateringPhotoGalery = CateringPhotoGalery::find($id);
        if (!$cateringPhotoGalery) {
            return response() -> json ([
                'status' => false,
            ]);
        }

        try {
            Storage::delete($cateringPhotoGalery -> image);
            $cateringPhotoGalery -> update(['author' => auth() -> user() -> email]);
            $cateringPhotoGalery -> delete();
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
