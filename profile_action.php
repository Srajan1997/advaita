<?php
session_start();
$user_id = $_SESSION['user_id'];

$age = $_POST['age'];

$age_status = $age>17?0:1;

$city = $_POST['city'];

$url = $_POST['action_string'];

$parts = parse_url($url);
parse_str($parts['query'], $query);
$a_r = $query['a_r'] - '0';
$e_r = $query['e_r'] - '0';
$c_r = $query['c_r'] - '0';
$n_r = $query['n_r'] - '0';
$h_r = $query['h_r'] - '0';
$s_r = $query['s_r'] - '0';
$m_r = $query['m_r'] - '0';
$r_r = $query['r_r'] - '0';
$heart = $query['heart']-'0';
$motion = $query['motion']-'0';
$vision = $query['vision']-'0';

$connection = mysqli_connect("localhost","root","","advaita");

if($connection)
{
    $update_query = "UPDATE user_table SET a_r=$a_r, e_r=$e_r, c_r=$c_r, n_r=$n_r, h_r=$h_r, s_r=$s_r, m_r=$m_r, r_r=$r_r, age = $age, city='$city', age_status=$age_status,lung=$heart,motion=$motion,vision=$vision,profile_status=1 WHERE user_id = '$user_id'";
    $result = mysqli_query($connection,$update_query);
    if($result) header('Location: account.php');
    else echo mysqli_error($connection);
}
else
{
    echo $update_query;
}






?>