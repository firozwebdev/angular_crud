<?php
include('config/config.php');
include('lib/Database.php');
$db= new Database();


$data = json_decode(file_get_contents('php://input'));

$query = "update tbl_employee set
          emp_name='$data->emp_name',
          emp_email_address='$data->emp_email_address',
          emp_full_name='$data->emp_full_name'
          where emp_id = '$data->emp_id'";
$success= $db->update($query);

if($success){
    echo "Updated data Successfully";
}

