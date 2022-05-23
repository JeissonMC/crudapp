<?php
session_start();

$conn = mysqli_connect("localhost","root","","crudapi");

if(isset($_GET['Id_Usuario'])) {
  $id = $_GET['Id_Usuario'];
  $query = "DELETE FROM usuario WHERE Id_Usuario = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Se elimino el registro con exito';
  $_SESSION['message_type'] = 'danger';
  header('Location: index.php');
}

?>