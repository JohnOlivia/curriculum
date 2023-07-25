<?php 
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
  const TAX = 1.1;
  //②商品の情報を連想配列に入れましょう。
  $products = ["鉛筆" => 100 , "消しゴム" => 150, "物差し" => 500 ];

   //③税率を計算する関数を用意します。
     //引数には値段を受け取り、税込価格を返答します。
    $result = array_map('multi', $products);

    function multi($num) {
      return $num * TAX;
    }

  //  function getPrice ($products) { 
  //   $price = $products * TAX;
  //   return($price);
  //  }
  //  getPrice($products["鉛筆"]);
  //  getPrice($products["消しゴム"]);
  //  getPrice($products["物差し"]);

   //④繰り返し文を使って画面に指定の文字を表示しましょう！foreach文
  foreach ($result as $key => $value) {
    echo $key;
    echo 'の税抜価格は';
    echo $value;
    echo '円です。';
    echo '<br>';
  }

?>
