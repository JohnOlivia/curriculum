<?php
require_once('./dbconnect.php');

session_start();

if (isset($_POST['login'])) {
  // ログイン名が入力されていない場合の処理
  if (empty($_POST["name"])) {
    echo "名前が未入力です。";
  }
  // パスワードが入力されていない場合の処理
  if (empty($_POST["password"])) {
    echo "パスワードが未入力です。";
  }
  if (!empty($_POST['name']) && !empty($_POST['password'])) {
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

    $pdo = db_connect();
    try {
      $sql = 'SELECT * FROM users WHERE name =:name';
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $name);
      $stmt->execute();
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
    }

    // 結果が1行取得できたら
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      // ハッシュ化されたパスワードを判定する定形関数のpassword_verify
      // 入力された値と引っ張ってきた値が同じか判定しています。
      if (password_verify($password, $row['password'])) {
        // セッションに値を保存
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        // main.phpにリダイレクト
        header('Location: main.php');
        exit;
      } else {
        // パスワードが違ってた時の処理
        echo 'パスワードに誤りがあります。';
      }
    } else {
      //ログイン名がなかったときの処理
      echo 'ユーザー名かパスワードに誤りがあります。';
    }
  }
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>ログイン</title>
</head>

<body>
  <div class="login__wrap">
    <div class="login__title">
      <h1>ログイン画面</h1>
      <div class="signUp__btn">
        <a href="signUp.php" class="signUp__btn">新規ユーザー登録</a>
      </div>
    </div>
    <form action="" method="post">
      <input type="text" name="name" id="name" placeholder="ユーザー名"><br>
      <input type="password" name="password" id="password" placeholder="パスワード"><br>
      <input type="submit" value="ログイン" class="blue__btn" name="login">
    </form>
  </div>
</body>

</html>