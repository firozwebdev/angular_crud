<?php
include('config/config.php');
include('lib/Database.php');
$db= new Database();


$data = json_decode(file_get_contents('php://input'));
$query = "select * from tbl_employee where emp_id = '$data->emp_id'";
$employee= $db->select($query);
while($row = $employee->fetch_assoc()){
    $single[]=$row;
}

echo json_encode($single);