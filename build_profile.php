<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
<?php include('home_links.php'); ?>

<script>



<?php echo "var action_string = 'profile_action.php?city_name=v';";  ?>

var c=0;
function tick(label)
{
    c++;
    document.getElementById(label).style.opacity = "0";
    document.getElementById(label).style.transform = "rotate(60deg)";
    action_string+=('&'+label+'=1'); 
    setTimeout(() => {
        document.getElementById(label).style.display = "none";
    }, 500);
    console.log(c);
    if(c==8)
{
    document.getElementById('head_label').innerHTML= 'Tell us about your health concerns';
    document.getElementById('h1').style.display="inline-block";
}
}

function cross(label)
{
    c++;
    document.getElementById(label).style.opacity = "0";
    document.getElementById(label).style.transform = "rotate(-60deg)";
    action_string+=('&'+label+'=0');   
    setTimeout(() => {
        document.getElementById(label).style.display = "none";
    }, 500);
    console.log(c);
    if(c==8)
{
    document.getElementById('h1').style.display="inline-block";
    document.getElementById('head_label').innerHTML = 'Tell us about your problems';
}

}



var hf_count={"heart":0, "vision":0, "motion":0};
console.log(hf_count);

function hf(issue)
{
    hf_count[issue]++;
    console.log(hf_count);

    if(hf_count[issue]%2)
        {
            document.getElementById(issue).style.opacity = "1";
            console.log(hf_count);
            console.log("HF_COUNT == 1");
        }
    else
        {
            document.getElementById(issue).style.opacity = "0.7";
            console.log(hf_count);
            console.log("HF_COUNT == 0");

        }
}

function over(type,id)
{
    document.getElementById('health_label').innerHTML=(type);
}
function next()
{
    action_string+=("&heart=" + hf_count['heart']%2);
    action_string+=("&vision=" + hf_count['vision']%2);
    action_string+=("&motion=" + hf_count['motion']%2);
    document.getElementById('h1').style.display = "none";
    document.getElementById('head_label').innerHTML="Tell us more";
    document.getElementById('details').style.display = "inline-block";
    document.getElementById('action_string').value = action_string;
    console.log(document.getElementById('action_string').value);
}

</script>


<style>
    <?php include('assets/css/frame.css'); ?>
    body{overflow-y:hidden;}
    .google_input{font-family:'Raleway';width: 300px; display: inline-block; border-top: none;border-left: none;border-right: none; height: 50px; text-align: center; font-size: 20px;  border-bottom-width: 2px;padding-bottom: -30px;border-bottom-color: lightgrey;transition-duration: 0.5s;background-color: transparent;}
.google_input:hover{font-family:'Raleway';width: 400px; display: inline-block; border-top: none;border-left: none;border-right: none; height: 50px; text-align: center; font-size: 20px;  border-bottom-width: 2px;padding-bottom: -30px;border-bottom-color: black;transition-duration: 0.5s;background-color: transparent;}

body {overflow-x: hidden; font-family:'Raleway';background-size:cover;}

.google_button:hover{font-family:'Raleway';height:30px;background-color: black; cursor: pointer;padding:10px;border-width: 0px;color:white;}

.google_button{font-family:'Raleway';height:30px;background-color: black; cursor: pointer;padding:10px;}

.google_buttonx:hover{font-family:'Raleway';height:30px;width:150px;background-color: black; text-align: center;color: white;border-radius: 4px;transition-duration: 2s;border-color: transparent;cursor: pointer;font-size: 16px;}

.google_buttonx{font-family:'Raleway';height:30px; width:150px;text-align: center;color: black;border-radius: 4px;border-color: black; border-width: 1px;border-style: solid;transition-duration: 2s;font-size: 16px;background-color: white;}

a{text-decoration: none; }
</style>
<center>
    <br><br><br><br>
    <div><button id="head_label" class="bttn-slant bttn-lg bttn-primary">Choose your travel priorities</button></div>
</center>
<div class="frames">
<div class="frame" id="n_r" style="background-image:url('assets/images/n_r.jpeg');top:;left:;z-index:1;"><center><div class="label">NATURAL NAVIGATIONS</div><div onclick="tick('n_r')" class="tick">&#10004</div><div onclick="cross('n_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="h_r" style="background-image:url('assets/images/h_r.jpeg');top:20px;left:-300px;z-index:2;"><center><div class="label">ANCIENT ARCHITECTURES</div><div onclick="tick('h_r')" class="tick">&#10004</div><div onclick="cross('h_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="e_r" style="background-image:url('assets/images/e_r.jpeg');top:40px;left:-600px;z-index:3;"><center><div class="label">ENTERTAINING EVENINGS</div><div onclick="tick('e_r')" class="tick">&#10004</div><div onclick="cross('e_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="r_r" style="background-image:url('assets/images/r_r.jpeg');top:60px;left:-900px;z-index:4;"><center><div class="label">ROMANTIC REMINNENCES</div><div onclick="tick('r_r')" class="tick">&#10004</div><div onclick="cross('r_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="s_r" style="background-image:url('assets/images/s_r.jpeg');top:-300px;left:100px;z-index:5;"><center><div class="label">SPIRITUAL SIGHTINGS</div><div onclick="tick('s_r')" class="tick">&#10004</div><div onclick="cross('s_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="m_r" style="background-image:url('assets/images/m_r.jpeg');top:-280px;left:-200px;z-index:6;"><center><div class="label">MARKETING MANIA</div><div onclick="tick('m_r')" class="tick">&#10004</div><div onclick="cross('m_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="c_r" style="background-image:url('assets/images/c_r.jpeg');top:-260px;left:-500px;z-index:7;"><center><div class="label">CITY CINELIGHTS</div><div onclick="tick('c_r')" class="tick">&#10004</div><div onclick="cross('c_r')" class="cross">&#10008</div></center></div>
<div class="frame" id="a_r" style="background-image:url('assets/images/a_r.jpeg');top:-240px;left:-800px;z-index:8;"><center><div class="label">ADVENTUROUS AVENUES</div><div onclick="tick('a_r')" class="tick">&#10004</div><div onclick="cross('a_r')" class="cross">&#10008</div></center></div>
</div>

<center>
<div class="healths" id="h1">

   <div class="health" onclick="hf('heart')"   onmouseover="over('Breathing Trouble','heart')" id="heart" style="background-image:url('assets/images/heart.png')"></div>
   <div class="health" onclick="hf('vision')"     onmouseover="over('Vision Issues','vision')"  id="vision" style="background-image:url('assets/images/eye.png')"></div> 
   <div class="health" onclick="hf('motion')"     onmouseover="over('Movement Restriction','motion')" id="motion" style="background-image:url('assets/images/leg.png')"></div>
<br><br><br>
   <div><button id="health_label" class="bttn-slant bttn-md bttn-danger">Health Issues</button></div>
   <br><br><br>
   <div><button id="health_label" class="bttn-slant bttn-md bttn-primary" onclick="next()">Next</button></div>
</div>

<div class="healths" id="details" style="display:none">

<form method="POST" action="assets/scripts/profile_action.php">
<input id="action_string" name="action_string" type="hidden">
<input name="age" type="number" placeholder="Your Age" class="google_input">
<br><br>
<input name="city" type="text" placeholder="Your City" class="google_input">
<br><br>
<div><button class="bttn-slant bttn-md bttn-primary" onclick="submit()">Update Profile</button></div>
</form>

</div>

</center>