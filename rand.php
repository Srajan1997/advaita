<?php

    function rand_wall($low, $up, $id, $base, $format)
    {
        $rand = random_int($low,$up);
        $file = "url('". $base . $rand . "." . $format ."')";
        $final = '"'.$file.'"';
        echo "<script>document.getElementById('" . $id . "').style.backgroundImage = " . $final . "</script>";
    }

?>