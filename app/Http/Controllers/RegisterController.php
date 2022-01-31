<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $validateData['password'] = bcrypt($validateData['password']);

        $request->session()->flash('success', 'Berhasil Daftar, Silahkan Login !!');

        User::create($validateData);
       return redirect('/login');
    }
}
