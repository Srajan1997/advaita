<html>
<?php include('home_links.php'); ?>

    <script>
var action_string="";

function next_counter()
{
    var nod = document.getElementById('days').innerHTML;
    var noh = document.getElementById('hours').innerHTML;
    action_string+= "&days=" + nod + "&hours=" + noh;
    console.log(action_string);
    document.getElementById('stage1').style.display = 'none';
    document.getElementById('stage2').style.display = 'inline-block';
    document.getElementById('dir').innerHTML = "Set your Travel Goals"
}
var count_choice=0;
function choice_select(id)
{
    count_choice++;
    var x = 3-count_choice;
    document.getElementById('goals').innerHTML = "Select " + x + " more"; 
    action_string+= "&" + id + "=1";
    document.getElementById(id).style.display = 'none';
    if(count_choice==3)
    {
        document.getElementById('dir').innerHTML = "Pick your favorites"
        document.getElementById('stage2').style.display = 'none';
        document.getElementById('stage3').style.display = 'inline-block';
    }

}


var count_place=0;
function place_select(id)
{
    count_place++;
    var y = 4-count_place;
    document.getElementById('cities').innerHTML = "Select " + y + " more"; 
    action_string+= "&city" + count_place + "=" + id;
    document.getElementById(id).style.display = 'none';
    if(count_place==4)
    {
        document.getElementById('stage3').style.display = 'none';
        document.getElementById('as').value = action_string;
        document.getElementById('plan_form').submit();

    }
}


</script>
<div class="container" id="home_container_plan" style="box-shadow: 0px 0px 0px white;">
    <br><br><br><br><br>
    <center>
<div><button class="bttn-slant bttn-lg bttn-royal" id="dir">Set travel stretch</button></div>
</center>
</div>
<center>

<?php 
include('assets/components/icon_gen_select_city.php');
include('assets/components/icon_gen_select_place.php');
include('assets/components/icon_gen_select_choice.php');

echo '<div id="stage1">';
echo '<br><br><br><br><br><br>';
icon_gen_function_city2("SELECT * FROM city_table");
echo '</div>';

echo '<div id="stage3"  style="display:none;">';
$city_name = $_GET['city_name'];
echo '<br><br><br><br><br><br><br><br><br><br><div><button class="bttn-fill bttn-lg bttn-danger" id="cities">Top Spots in '. $city_name .'</button></div>';
icon_gen_function_place("SELECT * FROM place_table WHERE city_name='$city_name'");
echo '</div>';

echo '<div id="stage2" style="display:none;">';
echo '<br><br><br><br><br><br><br><br><br><br><br><Br><br><div><button class="bttn-fill bttn-lg bttn-danger" id="goals">Choose any 3</button></div>';
echo '<br><br><br>';
icon_gen_function_choice("SELECT * FROM choice_table");
echo '</div>';

?>

<form action="travis4.php" method="POST" id="plan_form">
    <input id="as" type="hidden">
</form>
</center>