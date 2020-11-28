
<html>
<style>
<?php include('assets/css/icon_style.css'); ?>
</style>

<body>

<?php

class icon_strip
{
  public $link_base;
  public $image_url;
  public $place_name;

  function __construct($image_url)
  {
    $this->image_url = $image_url;
    echo '<div class="icon_strip" style="background-image:url(' . $this->image_url .')"></div>';
  }
}

?>
</body>

</html>
