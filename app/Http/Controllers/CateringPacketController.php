<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\CateringPacket;

class CateringPacketController extends Controller
{
    public function addView () {
        return view('cmsCateringPacketAdd');
    }

    public function editView ($id) {
        $data = CateringPacket::find($id);
        if ($data) {
            return view('cmsCateringPacketEdit', ['data' => $data]);
        }
        return redirect('/cmsCateringPacket');
    }

    public function store(Request $request)
    {
        try {
            $item = $request -> validate([
                'name' => ['required'],
                'description' => ['required'],
                // 'image' => ['required'],
            ]);
            // $image = $request -> file('image') -> store('cateringPacketImages');
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        $item['image'] = '/';
        $item['author'] = auth() -> user() -> email;

        try {
            CateringPacket::create($item);
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data') -> withInput( $request->except('password') );
        }

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsCateringPacket');
    }

    /**
     * Display the specified resource.
     */
    public function show(CateringPacket $cateringPacket)
    {
        try {
            return response() -> json ([
                'success' => true,
                'data' => $cateringPacket,
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
        $data = CateringPacket::latest() -> paginate(10);
        if ($request -> search) {
            $search = '%' . $request -> search . '%';
            $data = CateringPacket::latest() -> where('name', 'like', $search) -> orWhere('description', 'like', $search) -> paginate(10);
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

        return view('cmsCateringPacket', ['data' => $data, 'test' => $test, 'varSearch' => $request -> search]);
    }

    public function update(Request $request, $id)
    {
        $cateringPacket = CateringPacket::find($id);

        if (!$cateringPacket) {
            return redirect('/cmsCateringPacket');
        }

        try {
            $item = $request -> validate([
                'name' => ['required'],
                'description' => ['required'],
                // 'image' => ['required'],
            ]);
            // $image = NULL;
            // if ($request -> file('image')) {
            //     $image = $request -> file('image') -> store('cateringPacketImages');
            // }
        } catch (\Exception $e) {
            return back() -> with('failedAddContent', 'Gagal menambahkan data');
        }

        // if ($image) {
        //     $item['image'] = $image;
        //     Storage::delete($cateringPacket -> image);
        // }

        $item['author'] = auth() -> user() -> email;

        $cateringPacket -> update($item);

        $request -> session() -> flash('successAddContent', 'Berhasil menambahkan data');
        return redirect('/cmsCateringPacket');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cateringPacket = CateringPacket::find($id);
        if (!$cateringPacket) {
            return response() -> json ([
                'status' => false,
            ]);
        }

        try {
            // Storage::delete($cateringPacket -> image);
            $cateringPacket -> update(['author' => auth() -> user() -> email]);
            $cateringPacket -> delete();
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
