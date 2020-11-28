<?php

function strip_gen_function($query)
{

include('icon_strip.php');

$connection = mysqli_connect("localhost","root","","advaita");

$result = mysqli_query($connection, $query);
echo "<center>";
while($row = mysqli_fetch_assoc($result))
{
    $image_url = "'". $row['image_url'] . "'";
    new icon_strip($image_url);
}
echo "</center>";
}

?>