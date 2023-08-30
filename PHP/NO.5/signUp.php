<?php
require_once('./dbconnect.php');
session_start();

if (isset($_POST['signUp'])) {
  /* 入力情報の不備を検知 */
  if ($_POST['name'] === "") {
    $error['name'] = "blank";
  }
  if ($_POST['password'] === "") {
    $error['password'] = "blank";
  } else {
    $name = $_POST['name'];
    $password = $_POST['password'];
  }
  $pdo = db_connect();
  try {
    $sql = 'INSERT INTO users (name, password) VALUES(:name, :password)';
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare($sql);
    //値を入れた
    $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password_hash);
    // 実行 FILL_IN
    $stmt->execute();
    //　登録完了メッセージ出力
    echo '登録が完了しました。';
    header('Location: main.php');
    exit; 
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
  }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>新規登録</title>
</head>

<body>
  <form class="singUp__wrap" method="post">
    <h1>ユーザー登録画面</h1>
    <input type="text" name="name" id="name" placeholder="ユーザー名"><br>
    <input type="password" name="password" id="password" placeholder="パスワード"><br>
    <input type="submit" value="新規登録" class="blue__btn" name="signUp">
  </form>
</body>

</html>