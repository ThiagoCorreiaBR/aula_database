<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function signin(request $request)
    {
        $credentials=['email'=>$request->email,'password'=>$request->passworr];
        if (auth()->attempt($credentials))
        {
            return redirect('/');
        }

        return back(); //volta pra pagina de trás
    }

    public function register()
    {
        return view('register');
    }

    public function signout(request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password) ,  //criptografa a senha
        ]);
        return redirect('/login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}
