<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォーム入力</title>
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>">
</head>

<body>
  <h1>フォーム入力</h1>
  <form action="confirm.php" method="post">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="age">年齢:</label>
    <input type="text" id="age" name="age" required><br><br>

    <label for="phone">電話番号:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="email">メールアドレス:</label>
    <input type="text" id="email" name="email" required><br><br>

    <label for="address">住所:</label>
    <input type="text" id="address" name="address" required><br><br>

    <label for="question">質問:</label>
    <input type="text" id="question" name="question" required><br><br>

    <label for="human">性別:</label>
    <select id="human" name="human">
      <option value="男性">男性</option>
      <option value="女性">女性</option>
    </select>
    <br><br>

    <button type="submit">送信</button>
  </form>
</body>

</html>