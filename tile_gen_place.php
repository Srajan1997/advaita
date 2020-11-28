<?php

function tile_gen_function($query)
{

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center><br><br><br><br>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['place_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = $row['description'];
    $distance = $row['distance'];
    $money = $row['price'];
    $time = $row['time'];
    new tile($link_base,$image_url,$place_name,$distance,$money,$time);
}
echo "</center>";
}

?>