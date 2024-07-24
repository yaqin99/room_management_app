<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function layout()
    {
        $data = Dosen::orderBy('nama_dosen','ASC')->searchDosen()->paginate(10);
        $status = 'dosen' ; 
        return view('admin.pages.dosen' , [
            'data' => $data , 
            'status' => $status , 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function editDosen($id)
    {
        $update = Dosen::where('id',$id)->update([
            'nama_dosen' => request('nama_dosen'),
        ]);

        if($update){
            return redirect('/admin/dosen');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $update = Dosen::create([
            'nama_dosen' => $request->nama_dosen,
        ]);

        if($update){
            return redirect('/admin/dosen');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen , $id)
    {
        $cek = $dosen::find($id)->delete();
        if($cek){
            return redirect('/admin/dosen');
        }
    }
}
