<?php

namespace App\Http\Controllers;

use App\Models\Jam_Kuliah;
use Illuminate\Http\Request;

class JamKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function layout()
    {
        $data = Jam_Kuliah::paginate(15);
        $status = 'jam' ; 
        return view(
            'admin.pages.jam', [
                'data' => $data , 
                'status' => $status , 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addJam()
    {
        $addJam = Jam_Kuliah::create([
            'jam' => request('nama_jam'),
            'awal' => request('awal'),
            'akhir' => request('akhir'),
        ]);

        if($addJam){
            return redirect('/admin/jam');
        }
    }
    public function editJam($id)
    {
        $update = Jam_Kuliah::where('id',$id)->update([
            'jam' => request('nama_jam'),
            'awal' => request('awal'),
            'akhir' => request('akhir'),
        ]);

        if($update){
            return redirect('/admin/jam');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jam_Kuliah $jam_Kuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jam_Kuliah $jam_Kuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jam_Kuliah $jam_Kuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jam_Kuliah $jam_Kuliah,$id)
    {
        $cek = $jam_Kuliah::find($id)->delete();
        if($cek){
            return redirect('/admin/jam');
        }
    }
}
