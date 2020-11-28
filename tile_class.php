
<html>
<style>
<?php include('assets/css/tile_style.css'); ?>
</style>

<body>


<style>
<?php include('assets/css/tile_style.css'); ?>
</style>
<?php
class tile
{
  public $link_base;
  public $image_url;
  public $place_name;

  function __construct($link_base, $image_url, $place_name)
  {
    $this->link_base = $link_base;
    $this->image_url = $image_url;
    $this->place_name = $place_name;

    echo '<a href="'. $this->link_base .'' . $this->place_name .'.php"><div class="tile" id="'. $this->place_name .'"><center><div class="tile_image" style="background-image:url(' . $this->image_url .')"></div><div class="tile_name">' . $this->place_name . '</div></center></div>';
  }
}

?>
</body>

</html>
