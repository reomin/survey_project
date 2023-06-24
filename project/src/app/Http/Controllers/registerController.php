<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\Register;

class RegisterController extends Controller
{
    function post(Request $request)
    {
        $nickname = $request->nickname;
        $pwd = $request->pwd;
        //idはユニーク
        $id = $request->id;

        $result = Register::register($id, $pwd, $nickname);
        if ($result) {
            return view("login");
        } else {
            echo "failuer";
        }
    }
}
