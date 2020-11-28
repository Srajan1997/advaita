<?php

function icon_gen_function($query)
{

include('icon_class_select.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['city_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '/advaita/city_view.php?city_name=';
    new icon_select_city($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>