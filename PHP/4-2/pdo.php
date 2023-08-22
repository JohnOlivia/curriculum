<?php
// //データベース名
$dbname= 'checktest4';
// // ホスト名
$dbhost = 'localhost';

//ユーザー名
$dbuser = 'root';
//パスワード
$dbpass = 'root';
$dsn ="mysql:dbname=$dbname; host=$dbhost;charset=utf8";

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */

function connect() {
  global $dsn, $dbuser, $dbpass;
  
  try {
    // mysqlに接続
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch (Exception $e) {
    echo 'Error:' .$e->getMessage();
    die();
  }
}
?>