<?php
include '../include/handler.php';
$handler = new DbHandler();
$result = "";
if(isset($_GET)){
  $id = $_GET['id'];
  $query = "DELETE FROM todo WHERE id=".$id;
  $result = $handler->executeQuery($query, "Berhasil", '', '');
}
header('location: showTodoList.php'); 