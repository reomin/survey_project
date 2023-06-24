<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ホームページ</title>
</head>

<body>
    <h1>ホームページ</h1>

    <div class="home">
        <form method="POST" action="{{ route('api.post') }}">
            @csrf
            <div>
                <button type="submit">送信</button>
            </div>
        </form>
    </div>
</body>

</html>