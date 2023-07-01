<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ログインページ</title>
</head>

<body>
    <div class="title">
        <h1>ログインページ</h1>
    </div>

    <div id="login">
        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div>
                <input type="text" name="id">id</input>
            </div>
            <div>
                <input type="password" name="pwd">パスワード</input>
            </div>
            <div>
                <button type="submit">送信</button>
            </div>
        </form>
        <p>{{ session('user') }}</p>
    </div>
</body>

</html>