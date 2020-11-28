
<html>




<style>
<?php include('assets/css/tile_style_place.css'); ?>

</style>
<body>
<?php
class tile
{
  public $link_base;
  public $image_url;
  public $place_name;
  public $distance;
  public $money;
  public $time;
  function __construct($link_base, $image_url, $place_name,$distance,$money,$time)
  {
    $this->link_base = $link_base;
    $this->image_url = $image_url;
    $this->place_des = substr($link_base,0,200);
    $this->place_label = substr($place_name,0,14);
    $this->distance = $distance;
    $this->money = $money;
    $this->time = $time;

    echo '<center><div class="card"><div class="tile" id="'. $this->place_name .'"><center><div class="tile_image" style="background-image:url(' . $this->image_url .')"></div><div class="tile_name"><div style="font-size:24px; color:grey; font-weight:bold;">' . $this->place_label . '<br><br></div>' . $this->place_des . '</div></div><div class="labels"><button class="bttn-fill bttn-sm bttn-royal">About Rs. '. $this->money.'/-</button><button class="bttn-fill bttn-sm bttn-danger">Approx '. $this->distance . 'Kms</button><button class="bttn-fill bttn-sm bttn-success">Around '.$this->time.' hrs</button></div></center></div></center><br><br><br>';
  }
}

?>
</body>

</html>
