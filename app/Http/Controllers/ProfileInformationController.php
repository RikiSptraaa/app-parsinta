<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke($name)
    {
        return view('profile', ['name' => $name]);
    }
}
