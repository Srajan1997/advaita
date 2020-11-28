<?php

session_start();

if(!isset($_SESSION['user_id'])) header('Location: login.php');

$connection = mysqli_connect("localhost","root","","advaita");

$query = "SELECT * FROM user_table WHERE user_id='$user_id'";

$result = mysqli_query($connection,$query);

$data = mysqli_fetch_row($result);

include('assets/components/icon_gen_select_goal.php');

function issue_gen($issue)
{
    if($data[$issue]==1) echo $issue . " Issues | ";
}

?>
<html>
    <body>
        <center>
<button class="bttn-slant bttn-lg bttn-danger" >Your Advaita Profile</button>
<br><br>
<?php echo "Hi, ".$data['user_name'];?>
<br><br>
<?php echo "Your Age: ".$data['age'];?>
<br><br><br>
<button class="bttn-slant bttn-md bttn-success" >Your Travel Preferences</button>
<div>
  <?php  icon_gen_function_goal($result); ?>
</div>
<br><br><br>
if($data['vision']==1 || $data['lung']==1 || $data['motion']==1 ) echo '<button class="bttn-slant bttn-md bttn-warning" >Your Health Concerns</button>';
<br><br>
<div>
  <?php  issue_gen('vision'); issue_gen('motion'); issue_gen('lung'); ?>
</div>
</center>
    </body>