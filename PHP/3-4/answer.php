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
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['my_name'];
//正解
$numAnswer = $_POST['numAnswer'];
$langAnswer = $_POST['langAnswer'];
$commandAnswer = $_POST['commandAnswer'];
//選択した回答
$selectedNum = $_POST['nums'];
$selectedLang = $_POST['langs'];
$selectedCommand = $_POST['commands'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function result($answer, $selectedAnswer)
{
  if ($answer === $selectedAnswer) {
    echo "正解";
  } else {
    echo "残念・・・";
  }
}
?>

<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($selectedNum, $numAnswer);
?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($selectedLang, $langAnswer);
?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($selectedCommand, $commandAnswer);
?>
    </div>
  </div>
</body>

</html>
