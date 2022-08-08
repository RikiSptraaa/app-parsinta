<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(RegisterRequest $request)

    {
        $HashPassword = Hash::make($request->password);

        $attribute = [
            'email' => $request->email,
            'name' => $request->name,
            'username' => $request->username,
            'password' => $HashPassword
        ];

        User::create($attribute);



        return redirect('/')->with('status', 'registrasi berhasil');
    }
}
