<?php
include("../includes/mysql_connect.php");

$contactID = $_GET["id"];

if (is_numeric($contactID)) {
    mysqli_query($con, "delete from tsh_contacts where id = $contactID") or die(mysqli_error($con));
    header("Location:edit.php");
}
