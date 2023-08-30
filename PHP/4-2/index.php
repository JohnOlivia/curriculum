<?php
require_once('./getData.php');

$date = new getData();
$user =  $date->getUserData();
$post =  $date->getPostData();
// $connect = connect();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>4章チェックテスト</title>
</head>

<body>
  <div class="wrap">
    <header>
      <img src="images/4test_logo.png" alt="" width="180" height="100">
      <div class="header_text">
        <h1 class="name__area">ようこそ <?php echo $user['last_name'] . $user['first_name']; ?>さん</h1>
        <h2 class="login__area">最終ログイン日: <?php echo $user['last_login']; ?></h2>
      </div>
    </header>
    <main>

      <table>
        <tr>
          <th>記事ID</th>
          <th>タイトル</th>
          <th>カテゴリ</th>
          <th>本文</th>
          <th>投稿日</th>
        </tr>

        <?php foreach ($post as $row) :?>
        <tr>

        </tr>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php if ($row['category_no'] === 1) {
              echo '食事';
            } elseif ($row['category_no'] === 2) {
              echo '旅行';
            } else {
              echo 'その他';
            }?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['created']; ?></td>
        </tr>
        <?php endforeach ;?>
        </table>

    </main>
    <footer>
      <p>Y&I group.inc</p>
    </footer>
  </div>
</body>

</html>