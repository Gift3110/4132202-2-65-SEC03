<?php
$id = $_GET['id'];

require "condb.php";

try {
    $sql = "DELETE FROM tb_user WHERE user_id = '$is' ";
    mysqli_query($link, $sql);
    echo "Affected : " .mysali_affected_row($link);
} catch (Excption $e) {
    echo $e . "Error  on": " .mysqli_errno"($link);
}
}