<?php
session_start();
if(isset($_SESSION['user_id'])) header('Location: ../../account.php');
$user_id = $_POST['user_id'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost','root','','advaita');
if($connection)
{
$hash = md5($password);
$query_check = "SELECT * FROM user_table WHERE user_id = '$user_id'";
$result_check = mysqli_query($connection, $query_check);
if (mysqli_fetch_assoc($result_check)['password'] == $hash) 
{
$_SESSION['user_id'] = $user_id;
header('Location: ../../account.php');
}
else
{
header("Location: ../../login.php?eid=4");
}
}
else header("Location: ../../login.php?eid=3");
?>