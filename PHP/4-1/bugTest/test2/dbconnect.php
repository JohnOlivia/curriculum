<?php
// セッション開始
if (!isset($_SESSION)) {
  session_start();

}
// DBサーバのURL
$db['host'] = "localhost";
// ユーザー名
$db['user'] = "mydb";
// ユーザー名のパスワード
$db['pass'] = "goal";
// データベース名
$db['dbname'] = "YIGroupBlog";
