<?php

function icon_gen_function_city2($query)
{

include('icon_class_select_city2.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['city_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '/advaita/travel_planner.php?city_name=';
    new icon_select_city($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>