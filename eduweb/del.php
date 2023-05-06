<?php 
 $dbc = mysqli_connect('localhost', 'root', '', 'todo');

$todo_id = $_GET['id'];

$sql = "delete from todos where id = $todo_id";
mysqli_query($dbc, $sql);

echo '<script>alert("Todo is Deleted.")</script>';
echo("<script>location.href = 'to-do-list.php';</script>");

?>
				   
