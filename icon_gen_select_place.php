<?php




function icon_gen_function_place($query)
{

include('icon_class_select_place.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $place_name = $row['place_name'];
    $image_url = "'". $row['image_url'] . "'";
    $link_base = '/advaita/city_view.php?city_name=';
    new icon_select_place($link_base,$image_url,$place_name);
}
echo "</center>";
}

?>