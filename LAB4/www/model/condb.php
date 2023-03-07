<?php
$host = "db";
$user ="root";
$pass = "1234";
$db = "db_test";
$port = 3306;
try {
    $link = mysqli_connect($host,$user,$pass,$db,$port);
    mysqli_query($link,"SET NAMES utf8");
} catch (\EXception $e) {
    echo $e . "::" . mysql_errno($link);
}

?>
เขียนถึง เบญจา ปัตถานัง
