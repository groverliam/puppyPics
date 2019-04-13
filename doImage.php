<?php

    $blob_id = $_REQUEST['photoID']; //gets the request variable from the url that contains the id of the blob that we want to retrieve from the database
    include "../../sqlfiles/db_connection.php";

    $sql = "SELECT name, img FROM main WHERE photoID = '$blob_id'";
    $result = mysql_query($sql) or exit("QUERY FAILED!");
    list($name, $img) = mysql_fetch_array($result);
    header("Content-type: image/jpeg");
    header("Content-Disposition: attachment; filename= $img");
    if ($_REQUEST['resize'] != "" && $_REQUEST['resize'] != null) { //resizes the images if the url contains
        $dimensions = explode(",", $_REQUEST['resize']);
        echo resize($img, $dimensions[0], $dimensions[1]);
    } else {
        echo $img;
    }

    function resize($img, $desired_width, $desired_height) { // simple function for resizing images to specified dimensions from the request variable in the url
        $im = imagecreatefromstring($img);
        $new = imagecreatetruecolor($desired_width, $desired_height) or exit("bad url");
        $x = imagesx($im);
        $y = imagesy($im);
        imagecopyresampled($new, $im, 0, 0, 0, 0, $desired_width, $desired_height, $x, $y) or exit("bad url");
        imagedestroy($im);
        imagejpeg($new, null, 85) or exit("bad url");
        echo $new;
    }

?>