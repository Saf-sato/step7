<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device_width, initial_scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h1>商品情報一覧画面</h1>

    <!-- ①検索フォーム -->
    <div class="form_inline">

        <div class="form_group">
            <label id="textBox" for="product_name">
                <input placeholder="検索キーワード">
            </label>
        </div>

        <div class="form_group">
            <select id="selectBox">
                <option value="option1">メーカー名</option>
                <!-- メーカー名をcompaniesから引用する　JS -->
                <!-- optionで囲んだcompany名を選択できるようにする -->
            </select>
        </div>

        <div class="input_group">
            <button id="button" class="RegistrateBtn">検索</button>
        </div>
    </div>


    <!-- ③商品情報 -->
    <div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>商品画像</th>
                <th>商品名</th>
                <th>価格</th>
                <th>在庫数</th>
                <th>メーカー名</th>
                <th>
                    <!-- ②新規登録リンク -->
                    <div class="regist_button">
                        <button id="button" class="RegistrateBtn"style="background-color: orange">新規登録</button>
                    </div>
                </th>
    </div>
    </tr>

    <tr> <!-- ここからSQLテーブルのデータを反映させていく -->
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td>{{ $product->company->company_name }}</td>
        </tr>
        @endforeach


    </tr> <!-- ここまで -->


    <!-- テーブル内の詳細・削除 -->
    </table>
    <div class="action_button">
        <button id="button" class="DetailBtn"style="background-color: blue">詳細</button>
        <button id="button" class="DeleteBtn"style="background-color: red">削除</button>
    </div>
    <!-- ページネーション -->
    <div class="pagination">
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">次へ</a>
    </div>
    </div>
</body>


</html>
