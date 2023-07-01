<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    function post(Request $request)
    {
        $data = $request->session()->all();
        var_dump($data);

        die;
    }

    function get(Request $request)
    {
        $data = $request->session()->all();
        $value = session('user');
        $key = session('key');
        var_dump($value);
        var_dump($key);
        return view("home");
    }
}
