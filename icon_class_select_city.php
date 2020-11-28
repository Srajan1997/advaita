<html>
<style>
<?php include('assets/css/icon_style.css'); ?>
</style>

<body>

<?php

class icon_select_city
{
  public $link_base;
  public $image_url;
  public $place_name;

  function __construct($link_base, $image_url, $place_name)
  {
    $this->link_base = $link_base;
    $this->image_url = $image_url;
    $this->place_name = $place_name;
    $this->city = "'" . $place_name . "'";

    echo '<div class="icon" onclick="city_select('. $this->city .')" id="'. $this->place_name .'"><center><div class="icon_image" style="background-image:url(' . $this->image_url .')"></div><div class="icon_name">' . $this->place_name . '</div></center></div>';
  }
}

?>
</body>

</html>
