<?php
$user_id = $_GET['user_id'];
$user_name = $_GET{"user_name"};
$user_pass = $_GET['user_pass'];

require "condb.php";

try {
    $sql = INSERT INTo tb_user  
            VALUES('$user_id','$user_name','$user_pass') ";
    mysqli_query($link, $sql);
    echo "Affected : " .mysqli_affected_rows($link);
} catch (Excption $e) {
    echo $e . "Error  on": " .mysqli_errno"($link);
}
