<?php 
  include_once $_SERVER['DOCUMENT_ROOT'] . "/libs/mySQL-exe/" . "db-connect.php";
  include_once $_SERVER['DOCUMENT_ROOT'] . "/libs/mySQL-exe/" . "mysql-exe-functions.php";

  header("Access-Control-Allow-Origin: *");


  $index_list = array("rec_no","title","snippet","active");
  $mysql = "SELECT * FROM snippets WHERE active=1";
  $mySQL_return = query2D($pdo,$mysql,$index_list);

  if ($mySQL_return['var']['status'] == "success") {
    $data = $mySQL_return['data'];
    echo json_encode($data);
  }

?>