<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力内容確認</title>
</head>
<body>
  <h1>入力内容確認</h1>
  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $question = $_POST["question"];
    $human = $_POST["human"];

  // バリデーション
    if (!preg_match("/^[a-zA-Z\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}]+$/u" ,$name)){
    echo "<p>名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
    } elseif (!is_numeric($age) || $age < 0 || $age > 150){
    echo "<p>年齢は0から150の間で入力して下さい。</p>";
    } elseif(!preg_match("/^[0-9\-]+$/",$phone)){
    echo "<p>電話番号は半角数字とハイフンのみで入力してください。</p>";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo"<p>メールアドレスの形式が正しくありません。</p>";
    }elseif(!preg_match("/^[a-zA-Z0-9\-\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{4E00}-\x{9FFF}]+$/u",$address)){
    echo"<p>住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
    }else{
    // 入力内容の表示
    echo "<p>名前: " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>年齢: " . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . " 歳</p>";
    echo "<p>電話番号: " . htmlspecialchars($phone, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>メールアドレス: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>住所: " . htmlspecialchars($address, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>質問: " . htmlspecialchars($question, ENT_QUOTES, 'UTF-8') . "</p>";
    echo "<p>性別: " . htmlspecialchars($human, ENT_QUOTES, 'UTF-8') . "</p>";
    }
  }else{
    echo"<p>データが送信されていません。</p>";
  }

  ?>


</body>
</html>