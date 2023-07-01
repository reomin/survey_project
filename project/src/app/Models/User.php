<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users'; // テーブル名を指定

    protected $primaryKey = 'id'; // 主キーを指定

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nickname',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // ユーザー情報を追加する
    public static function RegisterUser($id, $nickname, $password)
    {
        $user = new User();
        $user->id = $id;
        $user->nickname = $nickname;
        $user->password = bcrypt($password); // パスワードのハッシュ化
        $user->save();

        return $user;
    }

    // IDに基づいてユーザーを取得する
    public static function getUserById($id)
    {
        return self::find($id);
    }

    // IDが存在するかを確認する
    public static function CheckUserId($id)
    {
        return self::where('id', $id)->exists();
    }
}
