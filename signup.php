<html>
<?php include('home_links.php'); ?>
<style>
.google_input{font-family:'Raleway';width: 300px; display: inline-block; border-top: none;border-left: none;border-right: none; height: 50px; text-align: center; font-size: 20px;  border-bottom-width: 2px;padding-bottom: -30px;border-bottom-color: lightgrey;transition-duration: 0.5s;background-color: transparent;}
.google_input:hover{font-family:'Raleway';width: 400px; display: inline-block; border-top: none;border-left: none;border-right: none; height: 50px; text-align: center; font-size: 20px;  border-bottom-width: 2px;padding-bottom: -30px;border-bottom-color: black;transition-duration: 0.5s;background-color: transparent;}

body {overflow-x: hidden; background-image: url('assets/images/signin2.png');font-family:'Raleway';background-size:cover;}

.google_button:hover{font-family:'Raleway';height:30px;background-color: black; cursor: pointer;padding:10px;border-width: 0px;color:white;}

.google_button{font-family:'Raleway';height:30px;background-color: black; cursor: pointer;padding:10px;}

.google_buttonx:hover{font-family:'Raleway';height:30px;width:150px;background-color: black; text-align: center;color: white;border-radius: 4px;transition-duration: 2s;border-color: transparent;cursor: pointer;font-size: 16px;}

.google_buttonx{font-family:'Raleway';height:30px; width:150px;text-align: center;color: black;border-radius: 4px;border-color: black; border-width: 1px;border-style: solid;transition-duration: 2s;font-size: 16px;background-color: white;}

a{text-decoration: none; }
</style>
<script>
    setInterval(function(){
        if(document.getElementById('pass1').value == document.getElementById('pass2').value) document.getElementById('same').innerHTML="Passwords Match"
        if(document.getElementById('pass1').value != document.getElementById('pass2').value) document.getElementById('same').innerHTML="Passwords don't Match"
    },200);
      
</script>
<center>
<?php include('assets/components/gap.php') ?>
<h1>One Account. All of Advaita!</h1>
<br>
<button class="bttn-stretch bttn-md bttn-warning" id="same"></button></div>
<?php include('assets/components/gap.php') ?>
<form action="assets/scripts/signup_script.php" method="post" id="sign">
<input type="text" required name="user_name" placeholder="Your Full Name" class="google_input">
<?php include('assets/components/gap.php') ?>
<input type="text" required name="user_id" placeholder="Your E-Mail ID" class="google_input">
<?php include('assets/components/gap.php') ?>
<input type="password" required minlength="8"  name="password1" placeholder="Choose a password" id="pass1" class="google_input">
<?php include('assets/components/gap.php') ?>
<input type="password" required minlength="8"  name="password2" placeholder="Confirm Password" id="pass2" class="google_input">
<?php include('assets/components/gap.php') ?><br><br>
<div><button class="bttn-slant bttn-md bttn-primary" onclick="document.getElementById('sign').submit()">Create Account</button></div>
<br><br>
<p onclick="window.location.assign('login.php')" style='cursor:pointer;'>Already on Advaita? Log in here!</p>
</form>
</center>
</html>