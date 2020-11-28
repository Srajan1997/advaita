<?php
session_start();
if(isset($_SESSION['user_id'])) header('Location: ../../account.php');

$user_name = $_POST['user_name'];
$user_id = $_POST['user_id'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$connection = mysqli_connect('localhost','root','','advaita');
if($connection)
{
$hash = md5($password1);
$query_check = "SELECT * FROM user_table WHERE user_id = '$user_id'";
$result_check = mysqli_query($connection, $query_check);

if(mysqli_num_rows($result_check)) header("Location: ../../signup.php?eid=2");
else if($password1==$password2)
{
$query = "INSERT INTO user_table (user_name, user_id, password,profile_status) VALUES('$user_name','$user_id','$hash',0)";
$result = mysqli_query($connection, $query);
if($result){
    header("Location: ../../login.php?eid=1");
}
}
else if($password1!=$password2) header("Location: ../../signup.php?eid=4");
}
else header("Location: ../../signup.php?eid=3");

?>