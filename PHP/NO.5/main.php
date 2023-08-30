<?php
require_once('./dbconnect.php');
require_once('./function.php');

login_check();

$pdo = db_connect();

try {
  $sql = 'SELECT * FROM books';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();

} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
  die();
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>在庫一覧</title>
</head>

<body>
  <div class="main__wrap">
    <h1>在庫一覧画面</h1>
    <section id="btns">
      <div class="add__btn">
        <a href="books_login.php">新規登録</a>
      </div>
      <div class="logout__btn">
        <a href="logout.php">ログアウト</a>
      </div>
      <div class="books_add_btn">
        <a href="books_login.php">本の登録</a>
      </div>
    </section>
    <table>
      <tr>
        <th>タイトル</th>
        <th>発売日</th>
        <th>在庫数</th>
        <th>　</th>
      </tr>
  <?php foreach($stmt as $row): ?>
      <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['date']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td><a class="delete" href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
      </tr>
  <?php endforeach; ?>
    </table>
  </div>
</body>

</html>