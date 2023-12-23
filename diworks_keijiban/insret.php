<?php
// var_dump($_POST);
mb_internal_encoding("utf8");

if (!empty($_POST['handlename']) && !empty($_POST['title']) && !empty($_POST['comments'])) {
  $pdo = new PDO("mysql:dbname=lesson01;host=localhost;" ,"root" ,"root");
  $pdo->exec("INSERT INTO diworks_keijiban (handlename, title, comments) VALUES ('".$_POST['handlename']."', '".$_POST['title']."', '".$_POST['comments']."');");

  // new PDO() データベースに接続
  //  exec()　SQL文を実行
  // INSERT INTO　テーブルに値を挿入
  header("Location:http://localhost:8888//diworks_keijiban/index.php");
  // リダイレクト処理　自動転送のこと
  // header　HTTPヘッダー情報を送信するときに使用、HTTPによる「リクエスト（要求）→レスポンス（応答）」
  // Location HTTPヘッダーの一つ、ブラウザに対して指定されたURLにリダイレクトする
}else {
    // 未入力の項目がある場合
    // ?error=1 は、URLのクエリパラメータ
    header("Location: http://localhost:8888/diworks_keijiban/index.php?error");
    exit();
}

?>
