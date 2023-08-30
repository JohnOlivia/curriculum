<?php
require_once('./dbconnect.php');
// require_once('./function.php');
// // session_start();

// login_check();

if (!empty($_POST['books'])) {
  if(empty($_POST['title'])){
    echo 'タイトルが未入力です。';
  } elseif (empty($_POST['date'])) {
    echo '日付が未入力です。';
  }elseif (empty($_POST['stock'])) {
    echo '在庫数が未入力です。';
  }

  if(!empty($_POST['title']) && !empty($_POST['date'])&& !empty($_POST['stock'])) {
    $title = $_POST['title'];
    $date = $_POST['date'];
    $stock = $_POST['stock'];

    $pdo = db_connect();

    try {
      $sql = 'INSERT INTO books (title, date, stock) VALUES (:title, :date, :stock)';
      $stmt = $pdo->prepare($sql);

      //タイトルをバインド
      $stmt->bindParam(':title', $title);
      //データをバインド
      $stmt->bindParam(':date', $date);
      //タイトルをバインド
      $stmt->bindParam(':stock', $stock);
      //実行
      $stmt->execute();
      header('Location: main.php');
      echo '登録できました。';

      // var_dump($_POST['title']);
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
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
  <div class="books__wrap">
    <h1>本の登録画面</h1><br>
    <form action="" method="post">
      <input type="text" name="title" id="title" placeholder="タイトル"><br>
      <input type="date" name="date" id="date" placeholder="発売日"><br>
      <h2>在庫数</h2>
      <select name="stock">
        <option value="">選択してください</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
      </select> <br>
      <input type="submit" value="登録" class="blue__btn" name="books">
    </form>
  </div>
</body>

</html>