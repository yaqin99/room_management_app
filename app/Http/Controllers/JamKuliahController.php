<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Ruangan;
use App\Models\JamKuliahFix;
use Illuminate\Http\Request;

class JamKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function layout()
    {
        $data = JamKuliahFix::with(['ruangan','dosen'])->paginate(10);
        $ruangan = Ruangan::all();
        $dosen = Dosen::all();
        $status = 'jam'; 
        return view(
            'admin.pages.jam', [
                'data' => $data , 
                'status' => $status , 
                'ruangan' => $ruangan , 
                'dosen' => $dosen , 
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addJam()
    {
        $addJam = JamKuliahFix::create([
            'jam' => request('nama_jam'),
            'dosen_id' => request('dosen'),
            'awal' => request('awal'),
            'akhir' => request('akhir'),
            'hari' => request('hari'),
            'ruangan_id' => request('ruangan'),
        ]);

        if($addJam){
            return redirect('/admin/jam');
        }
    }
    
    public function editJam($id)
    {
        $update = JamKuliahFix::where('id',$id)->update([
            'jam' => request('nama_jam'),
            'dosen_id' => request('dosen'),
            'awal' => request('awal'),
            'akhir' => request('akhir'),
            'hari' => request('hari'),
            'ruangan_id' => request('ruangan'),
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
    public function show(JamKuliahFix $JamKuliahFix)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JamKuliahFix $JamKuliahFix)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JamKuliahFix $jam_Kuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JamKuliahFix $jam_Kuliah,$id)
    {
        $cek = $jam_Kuliah::find($id)->delete();
        if($cek){
            return redirect('/admin/jam');
        }
    }
}
