<?php
// var_dump($_POST);

mb_internal_encoding("utf8");
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;" ,"root" ,"root");
  $pdo->exec("INSERT INTO contactform(name,mail,age,comments)
  values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>
<!-- new PDO()　データベースに接続する -->
<!-- exec()　SQL文を実行 -->
<!-- INSERT INTO　テーブル名（カラム、カラム・・・） -->
<!-- values('".$_POST['']."');受け取った値をテーブルに挿入する -->
<!doctype html>
<html lang=“ja”>
<head>
  <meta charset="utf-8">
  <title>お問合わせフォームを作る</title>
  <link rel="stylesheet"type="text/css" href="style2.css">
</head>

<body>
  <h1> お問合わせフォーム</h1>
  <div class="confirm">
    <p> お問い合わせ有難うございました。
      <br> 3営業日以内に担当者よりご連絡差し上げます。
    </p>
  </div>
</body>
</html>
