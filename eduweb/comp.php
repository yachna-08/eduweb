<?php 

/* Created by E-siksha @ www.e-siksha.in */
// Run the connection here

 $dbc = mysqli_connect('localhost', 'root', '', 'login_register_db');


$todo_id = $_GET['id'];

$sql = "update todos set status=1 where id = $todo_id";
mysqli_query($dbc, $sql);

echo '<script>alert("Your Todo is Completed.")</script>';
echo("<script>location.href = 'to-do-list.php';</script>");


?>
