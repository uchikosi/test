<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>diworksblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <div>
      <img src="diblog_logo.jpg" id="logo">
      <a href="http://localhost:8888/diworks_keijiban/index.php"></a>
    </div>

    <div id="menu">
      <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;" ,"root" ,"root");
        $stmt = $pdo->query("SELECT * FROM diworks_keijiban");
        // new PDO()　データベースに接続する
        // qluery　値を取得は配列で返す
      ?>
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>D.I.Blogについて</li>
        <li>登録ホーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </div>
  </header>

  <main>
    <div id="left">
      <div id='main_titole'>
        <h1 iD="books">プログラミングに役立つ掲示板</h1>
      </div>

      <div class="leftmain">
        <h3 class='form'>入力フォーム</h3>
        <form method="post" action="insret.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>
          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>
          <div>
            <label>コメント</label>
            <br>
            <textarea cols="35" rows="7" name="comments"></textarea>
          </div>
          <div class='post_button'>
            <input type="submit" class="submit" value="投稿する">
          </div>
        </form>
        <?php
        // エラーを表示するための処理を追加
        if (isset($_GET['error'])) {
          echo "<p id='error'>未入力の項目があります。</p>";
        }
        ?>
        <!-- $_GET スーパーグローバル変数 クエリーパラメーターを受け取る-->
      </div>

      <?php
      while ($row = $stmt->fetch()) {
        echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
          echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
        echo "</div>";
      }
      // fetch() PDOから返ってきた値を取得
      ?>
    </div>
    <div id="right">
      <div class="rightmain">
        <h2 class="topiX">人気記事</h2>
        <ul>
          <li>PHPオススメ本</li>
          <li>PHP MyAdminの使い方</li>
          <li>いま人気のエディタTops</li>
          <li>HTMLの基礎</li>
        </ul>
      </div>
      <div class="rightmain">
        <h2 class="topiX">オススメリンク</h2>
        <ul>
          <li>ﾃﾞｨｰｱｲﾜｰｸｽ株式会社</li>
          <li>XAMPPダウンロード</li>
          <li>Eclipseダウンロード</li>
          <li>Braketsのダウンロード</li>
        </ul>
      </div>
      <div class="rightmain">
        <h2 class="topiX">カテゴリ</h2>
        <ul>
          <li>HTML</li>
          <li>PHP</li>
          <li>MySQL</li>
          <li>JavaScript</li>
        </ul>
      </div>
    </div>
  </main>
  <footer>
    <p>Copytifht D.I.Worksl D.I.blog is the one which provides A to Z about programming</p>
  </footer>
  <!-- http://localhost:8888//diworks_keijiban/index.php -->
</body>
</html>
