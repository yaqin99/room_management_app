<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    public function loginView(){
        return view('admin.auth.login');
    }

    public function logOut(Request $req){
        Auth::guard('admin')->logout();
        //$request dan request() itu sama aja 
    $req->session()->invalidate();
 
    $req->session()->regenerateToken();
 
    return redirect('/loginView');
     }
    public function login (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
        if (Auth::guard('admin')->attempt(['username' => $req->username , 'password' => $req->password] , $req->remember)) {
            $req->session()->regenerate();
 
            return redirect()->intended('/admin')->with('success' , 'Selamat Datang Kembali');;
        } else {
            return back()->with('gagal' , 'Login Gagal');
        }

        if (Auth::viaRemember()) {

            $req->session()->regenerate();

            return redirect()->intended('/admin');
        }

        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
