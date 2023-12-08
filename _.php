<?php

function connectToDatabase()
{
  try {
    $dbUser_name = "root";
    $dbUser_password = "";
    $connection = "mysql:host=localhost; dbname=company_food; charset=utf8mb4";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];
    $db = new PDO($connection, $dbUser_name, $dbUser_password, $options);

    return $db;
  } catch (PDOException $ex) {
    die("Connection failed: " . $ex->getMessage());
  }
}
$db = connectToDatabase();



/* try {
  $dbUser_name = "root";
  $dbUser_password = "";
  $connection = "mysql:host=localhost; dbname=company_food; charset=utf8mb4";
  $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
  ];
  $db = new PDO($connection, $dbUser_name, $dbUser_password, $options);
} catch (PDOException $ex) {
  echo $ex;
} */










/* ini_set('display_erros', 1);

function _db()
{
  try {
    $user_name = "rootx";
    $user_password = "";
    // $db_connection = 'sqlite:'.__DIR__.'/database.sqlite';
    $db_connection = "mysql:host=localhost; dbname=company_food; charset=utf8mb4";

    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    //   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ   [{}]    $user->id
    $db_options = array(
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ// [['id'=>1, 'name'=>'A'],[]]  $user['id']
    );
    return new PDO($db_connection, $user_name, $user_password, $db_options);
  } catch (PDOException $e) {
    throw new Exception('ups... system under maintainance', 500);
    exit();
  }
} 
*/