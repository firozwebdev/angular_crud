<?php
include ('config/config.php');
include ('lib/Database.php');
$db= new Database();

$query = "Select * from tbl_employee";
$employees = $db->select($query);


?>