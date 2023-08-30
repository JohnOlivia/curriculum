<?php 
//ログインチェック
function login_check() {
  session_start();

  if(empty($_SESSION['user_name'])) {
    header('Location: login.php');
    exit;
  }
}
?>