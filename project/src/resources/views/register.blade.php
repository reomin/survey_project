<!DOCTYPE html>
<html lang="ja">

<head>
    <title>登録ページ</title>
</head>

<body>
    <h1>登録ページ</h1>
    <div id="register">
        <form method="POST" action="{{ route('register.post') }}">
            @csrf
            <div>
                <input type="text" name="id">id</input>
            </div>
            <div>
                <input type="password" name="pwd">パスワード</input>
            </div>
            <div>
                <input type="text" name="nickname">ニックネーム</input>
            </div>
            <div>
                <button type="submit">登録</button>
            </div>

        </form>
    </div>
</body>

</html>