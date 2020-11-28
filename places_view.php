<?php 
$city_name = $_GET['city_name'];
?>

<html>
    
<?php include('home_links.php'); ?>
<style>*{font-family:'Raleway';}</style>
</div>
<center>
<div class="city_body">
<?php 

include('assets/components/tile_gen_place.php');
include('assets/components/icon_gen_city.php');
include('assets/components/tile_class_place.php');
include('assets/components/strip_gen.php');

$connection = mysqli_connect("localhost","root","","advaita");

$query = "SELECT * FROM city_table where city_name= '$city_name' LIMIT 1";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);

echo '<br><br><br>';

echo '<div class="city_heading">'.$city_name. '</div><br>';

strip_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name' LIMIT 5");

echo '<button class="bttn-stretch bttn-md bttn-success"><br>'.$city_name. ' is a city located in the country of ' . $row['country_name'] .'.<br>  ' .$city_name. ' has monthly tourist visits exceeding ' . $row['visits'].'.<br>The best time to visit '. $city_name .' is from ' . get_month($row['month_start']) .' to ' . get_month($row['month_end']) .'<br><br></button>';

echo '<br><br><br><br><br>';



//BEST IN ADVENTURE (BLUE)
echo '<button class="bttn-fill bttn-lg bttn-primary">All places in '.$city_name.'</button>';
echo '<br><br>';
tile_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name'");


echo '<br><br><br><br><br>';



//FOOTER (GRAY)
include('assets/components/footer.php');

?>
</div>
</center>
</html>
