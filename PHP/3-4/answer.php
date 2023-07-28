<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$name = $_POST['my_name'];
//問題の答え
$numAnswer =$_POST['numAnswer'];
$langAnswer = $_POST['langAnswer'];
$commandAnswer = $_POST['commandAnswer'];
//選択した回答→よくわからない
$res = $_POST[''];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

?>
<p><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->