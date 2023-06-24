<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    //ログインが成功か失敗か
    //機能なのでライブラリフォルダに分けたい
    function login($id, $pwd)
    {
        $is_success = false;
        $user = User::getUserById($id);

        if ($user) {
            $result = password_verify($pwd, $user["pwd"]);
            if ($result) {
                $is_success = true;
                //セッションに情報を格納する
                Session::put('user', $user);
                return $is_success;
            } else {
                echo "パスワードがあっていません";
            }
        } else {
            echo "ユーザーが見つかりません";
        }
        return $is_success;
    }

    function post(Request $request)
    {
        $id = $request->id;
        $pwd = $request->pwd;
        $result = $this->login($id, $pwd);

        if ($result) {
            echo "ログイン成功";
            $user = Session::get('user');
            echo $user;
        } else {
            echo "ログインに失敗しました。";
        }
    }

    function get()
    {
    }
}
