<?php 
$file = 'http://localhost/vr/1.jpg';
$newfile = $_SERVER['DOCUMENT_ROOT'] . '/vr/176.jpg';

if ( copy($file, $newfile) ) {
    echo "Copy success!";
}else{
    echo "Copy failed.";
}
 ?>