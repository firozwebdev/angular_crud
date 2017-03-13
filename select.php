<?php
include('config/config.php');
include('lib/Database.php');
$db= new Database();

$query = "select * from tbl_employee order by emp_id desc";
$employees= $db->select($query);
while($row = $employees->fetch_assoc()){
    $data[]=$row;
}

echo json_encode($data);