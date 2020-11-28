<?php

function icon_gen_function($query)
{

include('icon_class.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center><br><br><br><br>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = substr(strval($row['place_name']),0,8);
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '';
    new icon($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>