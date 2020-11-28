<?php 

session_start();
if(!isset($_SESSION['user_id'])) header('Location: login.php');
?>
<html>

<?php include('home_links.php'); ?>

<div class="container" id="home_container_plan" style="box-shadow: 3px 5px 8px #d4d4d4;">
    <br><br><br><br><br>
    <center>
<div><button class="bttn-slant bttn-lg bttn-royal" id="dir">Select your destination</button></div>
</center>
</div>
<center>

<?php 
include('assets/components/icon_gen_select_city2.php');

echo '<div id="stage1">';
echo '<br><br><br><br><br><br><br><br><br>';
echo '<br><br><br><div><button class="bttn-fill bttn-lg bttn-danger" id="goals">DREAM DESTINATIONS</button></div>';

icon_gen_function_city2("SELECT * FROM city_table");
echo '</div>';


//FOOTER (GRAY)
include('assets/components/footer.php');


?>
</center>