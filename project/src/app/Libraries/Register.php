<?php

namespace App\Libraries;

use App\Models\User;

class Register
{
    static function register($id, $nickname, $pwd)
    {
        $result = User::CheckUserId($id);

        if ($result == true) {
            $check = User::registerUser($id, $nickname, $pwd);
            if ($check == true) {
                return true;
            }
        }
        return false;
    }
}
