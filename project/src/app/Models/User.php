<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    public $timestamps = false;


    // 与えられたidと一致するユーザーを返す
    static function getUserById($id)
    {
        return self::find($id);
    }

    //認証システムで使われるメソッド
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    //  データベース内に同じidを持ったユーザーがいないかを確認
    static function CheckUserId($id)
    {
        $user = self::find($id);
        if (empty($user)) {
            return true;
        } else {
            return false;
        }
    }


    //ユーザー情報を追加する
    static function registerUser($id, $nickname, $pwd)
    {
        $pwd = password_hash($pwd, PASSWORD_BCRYPT);
        $user = new User;
        $user->id = $id;
        $user->nickname = $nickname;
        $user->pwd = $pwd;
        $user->save();
        return true;
    }
}
