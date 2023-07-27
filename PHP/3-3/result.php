<?php

  //②フォームからのデータを受け取ります
  $my_name = $_GET['my_name'];
  $number = $_GET['number'];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
  $random = rand(1, 6);
  $randomNum = $number * $random;

  //④掛け合わせた数字の結果によっておみくじを選び、変数に入れます
  if ($randomNum >= 1 && $randomNum <= 10) {
    $result = '凶';
  } elseif ($randomNum >= 11 && $randomNum <= 15) {
    $result = '小吉';
  } elseif ($randomNum >= 16 && $randomNum <= 20) {
    $result = '中吉';
  } elseif ($randomNum >= 21 && $randomNum <= 25) {
    $result = '吉';
  } elseif ($randomNum >= 26 && $randomNum <= 36) {
    $result = '大吉';
  } else {
    $result = '残念';
  }

  
  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  date_default_timezone_set('Asia/Tokyo');
  echo date("Y/m/d H:i:s");
  echo '<br>';
  echo '名前は、'.$my_name. 'です。' ;
  echo '<br>';
  echo '番号は'.$randomNum.'です。';
  echo '<br>';
  echo '結果は'.$result. 'です。';
  ?>