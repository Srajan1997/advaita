<?php

session_start();

if(!isset($_SESSION['user_id'])) header('Location: login.php');
$user_id = $_SESSION['user_id'];


function icon_gen_function_goal($row)
{


$goals = array('r_r','a_r','e_r','s_r','n_r','h_r','m_r','c_r');

$names = array('Romance','Adventure','Entertainment','Spirituality','Nature','History','Markets','Lifestyle');

include('assets/components/icon_class_select_choice.php');


echo "<center>";
for($x = 0; $x<sizeof($goals);$x++)
{
if($row[$goals[$x]]==1)
{
    $place_name = $names[$x];
    $image_url = "'assets/images/". $goals[$x] . ".jpeg'";
    $link_base = '';
    new icon_select_choice($link_base,$image_url,$place_name);
}
}
echo "</center>";
}




include('home_links.php');

$connection = mysqli_connect("localhost","root","","advaita");

$query = "SELECT * FROM user_table WHERE user_id='$user_id'";

$result = mysqli_query($connection,$query);

$data = mysqli_fetch_assoc($result);
if($data['profile_status']==0) header('Location: build_profile.php');


?>
<html>
    <style>
body{
    background-image:url('assets/images/pic.jpg');
    background-size:cover;
}

    </style>
    <body>
        <center>
            <br><br><br><Br>
<button class="bttn-slant bttn-lg bttn-primary" >Your Advaita Profile</button>
<br><br>
<?php echo "<h2>Hi, " . $data['user_name'] . "</h2>";?>
<?php echo "<h3>Your Age: ".$data['age'] . "</h3>";?>
<br><br>
<button class="bttn-slant bttn-md bttn-success" >Travel Preferences</button>
<br><br>
<div>
  <?php  icon_gen_function_goal($data); ?>
</div>
<br><br><br>
<?php if($data['vision']==1 || $data['lung']==1 || $data['motion']==1 ) echo '<button class="bttn-slant bttn-md bttn-warning" >Health Concerns</button>';
else echo '<button class="bttn-slant bttn-md bttn-warning" >No Health Issues registered!</button>';
?>
<br><br>
<div>
  <?php
  if($data['lung']==1) echo "Breathing Trouble ";
  if($data['vision']==1) echo "| Vision Issues ";
  if($data['motion']==1) echo "| Movement Restrictions";
  ?>
</div>

<br><br><br>
<button class="bttn-fill bttn-sm bttn-danger" onclick="window.location.assign('profile_builder.php')" >Update your Profile</button>
<button class="bttn-fill bttn-sm bttn-royal" onclick="window.location.assign('assets/scripts/logout.php')" >Log Out of Advaita</button>
<button class="bttn-fill bttn-sm bttn-danger" onclick="window.location.assign('assets/requirements/change_password.php')" >Change Password</button>
<br>
</center>
    </body>