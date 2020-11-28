<?php 

$city_name = $_GET['city_name'];
?>

<html>
<style>*{font-family:'Raleway'}</style>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
<?php include('home_links.php'); ?>
</div>
<center>
<div class="city_body">
   
<?php 

include('assets/components/tile_gen_city.php');
include('assets/components/icon_gen_city.php');
include('assets/components/tile_class_city.php');
include('assets/components/strip_gen.php');
$connection = mysqli_connect("localhost","root","","advaita");

$query = "SELECT * FROM city_table where city_name= '$city_name' LIMIT 1";

$result = mysqli_query($connection,$query);

$row = mysqli_fetch_assoc($result);

echo '<br><br><br>';

echo '<div class="city_heading">'.$city_name. '</div>';

strip_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name' LIMIT 5");

echo '<br><button class="bttn-stretch bttn-md bttn-success">Monthly Visits: ' . $row['visits'] . '</button><br>';

echo '<br><button class="bttn-stretch bttn-md bttn-success">Average Rating: ' . $row['rating'] . '</button><br>';

echo '<br><button class="bttn-stretch bttn-md bttn-success">Best Time: ' . get_month($row['month_start']) . ' to ' . get_month($row['month_end']) . '</button>';


echo '<br><br><br><br><br>';


//BEST IN ADVENTURE (BLUE)
echo '<button class="bttn-fill bttn-lg bttn-royal">BEST IN ADVENTURE</button>';
tile_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name' ORDER BY a_r DESC LIMIT 5","#1d89ff");


echo '<br><br><br><br><br>';

//BEST IN NATURE (GREEN)
echo '<button class="bttn-fill bttn-lg bttn-success">BEST IN NATURE</button>';
tile_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name'  ORDER BY n_r DESC LIMIT 5","#28b78");


echo '<br><br><br><br><br>';

//BEST IN ROMANCE (RED)
echo '<button class="bttn-fill bttn-lg bttn-danger">BEST IN ROMANCE</button>';
tile_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name'  ORDER BY r_r DESC LIMIT 5","#ff5964");


echo '<br><br><br><br><br>';

//BEST IN HISTORY (PURPLE)
echo '<button class="bttn-fill bttn-lg bttn-warning">BEST IN HISTORY</button>';
tile_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name'  ORDER BY h_r DESC LIMIT 5","#bd2df5");


echo '<br><br><br><br><br>';

echo '<button class="bttn-fill bttn-lg bttn-primary">PLACES TO VISIT</button>';
//ALL CITIES IN CIRCLE ICONS
icon_gen_function("SELECT * FROM place_table WHERE city_name = '$city_name' ");

echo '<br><br><br><br><br><br><br><br><a href="places_view.php?city_name='. $city_name .'"><button class="bttn-unite bttn-md bttn-success">More about these spots</button></a>';
echo '<br><br><br><br><br><br><br><br><a href="trip_planner.php?city_name='. $city_name .'"><button class="bttn-unite bttn-md bttn-warning">Plan a trip to this City</button></a>';

//FOOTER (GRAY)
include('assets/components/footer.php');

?>
</div>
</center>
</html>
