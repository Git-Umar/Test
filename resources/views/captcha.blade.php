<?php
resource $image = $postImg;
 header("Content-type: image/jpeg");  
imagejpeg($image);
?>