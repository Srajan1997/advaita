<?php

function icon_gen_function_choice($query)
{

include('icon_class_select_choice.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['choice_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '/advaita/city_view.php?city_name=';
    new icon_select_choice($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>