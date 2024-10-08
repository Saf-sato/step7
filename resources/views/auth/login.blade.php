<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device_width, initial_scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>ユーザーログイン画面</h1>
    <div>

        <form id="form_area" class="form_inline" method="post">
            <div class="form_group">
                <div class="input_group">
                    <input id="password" name="password" type="text" class="form_control" placeholder="パスワード">
                </div>
            </div>
            <div class="form_group">
                <div class="input_group">
                    <input id="address" name="address" type="text" class="form_control" placeholder="アドレス">
                </div>
            </div>
        </form>
        <div class="button">
            <a href="registerBtn" class="button" style="background-color: orange";>新規登録</a>
            <a href="loginBtn" class="button" style="background-color: lightblue";>ログイン</a>
        </div>

    </div>
</body>


</html>
