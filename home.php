<html>

<?php include('home_links.php'); ?>
<?php include('assets/scripts/rand.php'); ?>
<div class="container" id="home_container">
<center id="title_tab">
<div id="title">advaita</div>
<br>
<div><button class="bttn-slant bttn-lg bttn-warning">The World is my home!</button></div>
</center>
</div>
<center>
<div class="home_body">

<?php 

rand_wall(0,8,"home_container","assets/images/","jpg");

include('assets/components/tile_gen.php');
include('assets/components/icon_gen.php');
include('assets/components/tile_class.php');

echo '<br><br><br><br><br>';

//HIGHEST RATED (BLUE)
echo '<button class="bttn-fill bttn-lg bttn-danger">HIGHEST RATED</button>';
echo '<br><br><br>';
tile_gen_function("SELECT * FROM city_table ORDER BY rating DESC LIMIT 5");

echo '<br><br><br><br><br>';

//MOST VISITED (GREEN)
echo '<button class="bttn-fill bttn-lg bttn-success">MOST VISITED</button>';
echo '<br><br><br>';
tile_gen_function("SELECT * FROM city_table ORDER BY visits DESC LIMIT 5");

echo '<br><br><br><br><br>';

//ALL CITIES IN CIRCLE ICONS
echo '<button class="bttn-fill bttn-lg bttn-primary">DREAM DESTINATIONS</button>';
echo '<br><br><br>';
icon_gen_function("SELECT * FROM city_table");

echo '</div>';

//FOOTER (GRAY)
include('assets/components/footer.php');

?>


</center>
</html>
