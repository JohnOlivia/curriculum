<?php 
const dbuser = 'root';
const dbpass = 'root';
const dsn ="mysql:dbname=Checktest5; host=localhost;charset=utf8";

function db_connect() {
  try {
    $pdo = new PDO(dsn, dbuser, dbpass );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
        die();
  }
}

?>