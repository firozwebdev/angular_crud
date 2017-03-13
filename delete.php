<?php
include('config/config.php');
include('lib/Database.php');
$db= new Database();

$data = json_decode(file_get_contents('php://input'));
$query = "delete from tbl_employee where emp_id='$data->emp_id'";
$db->delete($query);
echo 'Data is deleted';
