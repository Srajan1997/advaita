<?php

function icon_gen_function_goal($result)
{

$row = mysqli_fetch_row($result);

$goals = array('r_r','a_r','e_r','s_r','n_r','h_r','m_r','c_r');

$names = array('Romance','Adventure','Entertainment','Spirituality','Nature','History','Markets','Lifestyle');

include('icon_class_select_choice.php');


echo "<center>";
for($x = 0; $x<sizeof($goals);$x++)
{
echo $row[$x];
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
?>