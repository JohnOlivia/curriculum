<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>チェックテスト</title>
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <div class="main__visual">
    <div class="q__text">
      <?php
      //POST送信で送られてきた名前を受け取って変数を作成
      $name = $_POST['my_name'];
      //①画像を参考に問題文の選択肢の配列を作成してください。
      $nums = ['80', '22', '20', '21'];
      $langs = ['PHP', 'Python', 'JAVA', 'HTML'];
      $commands = ['join', 'select', 'insert', 'update'];
      //② ①で作成した、配列から正解の選択肢の変数を作成してください
      // $answer = ['80', 'HTML', 'select'];
      $numAnswer = $nums[0];
      $langAnswer = $langs[3];
      $commandAnswer = $commands[1];
      ?>
      <p>お疲れ様です<?php echo $name; ?>さん</p>
      <!--フォームの作成 通信はPOST通信で-->
      <form action="answer.php" method="post">
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($nums as $num):?>
          <label for="<?php echo htmlspecialchars($num); ?>">
          <input type="radio" name="nums" id="<?php echo htmlspecialchars($num); ?>" value="<?php echo htmlspecialchars($num); ?>">
          <?php echo $num ?>
          </label>
        <?php endforeach ?>

        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($langs as $lang):?>
           <label for="<?php echo htmlspecialchars($lang); ?>">
            <input type="radio" name="langs" id="<?php echo htmlspecialchars($lang); ?>" value="<?php echo htmlspecialchars($lang); ?>">
            <?php echo $lang ?>
          </label>
        <?php endforeach ?>

        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($commands as $command) :?>
          <label for="<?php echo htmlspecialchars($command); ?>">
          <input type="radio" name="commands" id="<?php echo htmlspecialchars($command); ?>" value="<?php echo htmlspecialchars($command); ?>">
          <?php echo $command ?>
        </label>
      <?php endforeach ?>

        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="my_name" value="<?php echo $name; ?>">
        <input type="hidden" name="numAnswer" value="<?php echo $numAnswer; ?>">
        <input type="hidden" name="langAnswer" value="<?php echo $langAnswer; ?>">
        <input type="hidden" name="commandAnswer" value="<?php echo $commandAnswer; ?>">
        <br>
        <input type="submit" value="回答する">
      </form>
    </div>
  </div>
</body>

</html>