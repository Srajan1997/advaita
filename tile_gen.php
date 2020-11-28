<?php

function tile_gen_function($query)
{

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['city_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '';
    new tile($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>