<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
</head>

<body>
    <h1>新規商品登録</h1>

    <form id="form_area" class="form_inline" method="post">
        <div class="form_group">
            <div class="input_group">
                <label for="textbox">商品名</label>
                <input type="text" id="textbox" name="textbox">
            </div>
            <div class="input_group">
                <label for="options">メーカー</label>
                <select id="options" name="options">
                    <option value="option1"></option>
                    <option value="option2">オプション1</option>
                    <option value="option3">オプション2</option>
                </select>
            </div>
            <div class="input_group">
                <label for="textbox">価格</label>
                <input type="text" id="textbox" name="textbox">
            </div>
            <div class="input_group">
                <label for="textbox">在庫数</label>
                <input type="text" id="textbox" name="textbox">
            </div>
            <div class="input_group">
                <label for="textarea">コメント</label>
                <textarea id="textarea" name="textarea"></textarea>
            </div>
            <div class="input_group">
                <label for="file">商品画像</label>
                <input type="file" id="file" name="file">
            </div>
        </div>
        <div class="button">
            <div class="input_group">
                <button type="button">登録</button>
            </div>

            <div>
                <button type="button">戻る</button>
            </div>
        </div>
    </form>



</body>

</html>