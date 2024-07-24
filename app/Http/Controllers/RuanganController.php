<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use App\Models\Kategori;
use App\Models\Gender;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Ruangan::with(['kategori','gender'])->first();
        return view('welcome' , [
            'data' => $data , 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ruanganGender($genderId)
    {
        $kategori = Kategori::all();
        $gender = Gender::all();
        $status = 'ruangan' ; 

        $data = Ruangan::with(['kategori','gender'])->where('gender_id',$genderId)->SearchRuangan()->paginate(10);
        $data->appends(['search' => request('search')]);

        return view(
            'admin.pages.ruangan' , [
                'data' => $data , 
                'kategori' => $kategori , 
                'gender' => $gender , 
                'status' => $status , 

            ]
           );
    }
    public function ruanganKategori($kategoriId)
    {
        $kategori = Kategori::all();
        $gender = Gender::all();
        $status = 'ruangan' ; 

        $data = Ruangan::with(['kategori','gender'])->where('kategori_id',$kategoriId)->SearchRuangan()->paginate(10);
        $data->appends(['search' => request('search')]);

        return view(
            'admin.pages.ruangan' , [
                'data' => $data , 
                'kategori' => $kategori , 
                'gender' => $gender , 
                'status' => $status , 

            ]
           );
    }
    public function ruangan()
    {
        $kategori = Kategori::all();
        $gender = Gender::all();
        $status = 'ruangan' ; 
        $data = Ruangan::with(['kategori','gender'])->SearchRuangan()->paginate(10);
        $data->appends(['search' => request('search')]);
        return view(
            'admin.pages.ruangan' , [
                'data' => $data , 
                'kategori' => $kategori , 
                'gender' => $gender , 
                'status' => $status , 
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addRuangan()
    {
        $kondisi = 'ya' ; 
        $status = 'ya' ; 
        
        if(request('kondisi') == 1){
            $kondisi = 'Baik' ; 
        } else {
            $kondisi = 'Kurang Baik' ; 
        }

        if(request('status') == 1){
            $status = 'Terpakai' ; 
        } else {
            $status = 'Tidak Terpakai' ; 
        }

        
        
        $room = Ruangan::create([
            'kategori_id' => request('kategori') , 
            'gender_id' => request('gender') ,
            'nama_ruangan' => request('nama_ruangan'),
            'lokasi'=> request('lokasi'),
            'hint'=> request('hint') ,
            'kondisi'=> $kondisi , 
            'keterangan'=> request('keterangan') ,
            'status' => $status,
        ]);

        if($room){
            return redirect('/admin');
        }
    }
    public function editRuangan($id)
    {
        $kondisi = 'ya' ; 
        $status = 'ya' ; 
        
        if(request('kondisi') == 1){
            $kondisi = 'Baik' ; 
        } else {
            $kondisi = 'Kurang Baik' ; 
        }

        if(request('status') == 1){
            $status = 'Terpakai' ; 
        } else {
            $status = 'Tidak Terpakai' ; 
        }

        
        
        $room = Ruangan::where('id',$id)->update([
            'kategori_id' => request('kategori') , 
            'gender_id' => request('gender') ,
            'nama_ruangan' => request('nama_ruangan'),
            'lokasi'=> request('lokasi'),
            'hint'=> request('hint') ,
            'kondisi'=> $kondisi , 
            'keterangan'=> request('keterangan') ,
            'status' => $status,
        ]);

        if($room){
            return redirect('/admin');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruangan $ruangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruangan $ruangan , $id)
    {
        $cek = Ruangan::find($id)->delete();
        if($cek){
            return redirect('/admin');
        }
    }
}
