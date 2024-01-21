<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <h1>お問い合わせフォーム</h1>
  <form method="post" action="mail_confirm.php">
    <div>
      <label>名前</label>
      <br>
      <input type="text" class="text" size="35" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
      <!--  -->
    </div>
    <div>
      <label>メールアドレス</label>
      <br>
      <input type="text" class="text" size="35" name="mail" value="<?php echo isset($_POST['mail']) ? htmlspecialchars($_POST['mail']) : ''; ?>">
    </div>
    <div>
      <label>年齢</label>
      <br>
      <select class="dropdown" name="age">
        <option>選択してください</option>
        <?php
          for ($i = 18; $i <= 65; $i++) {
            $selected = isset($_POST['age']) && $_POST['age'] == $i ? 'selected' : '';
            echo "<option value=\"$i\" $selected>$i 歳</option>";
          }
        ?>
      </select>
    </div>
    <div>
      <label>コメント</label>
      <br>
      <textarea cols="35" rows="7" name="comments"><?php echo isset($_POST['comments']) ? htmlspecialchars($_POST['comments']) : ''; ?></textarea>
    </div>
    <div>
      <input type="submit" class="submit" value="送信する">
    </div>
  </form>
</body>

</html>
