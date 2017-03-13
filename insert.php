<?php
    include('config/config.php');
    include('lib/Database.php');
    $db= new Database();

    $data = json_decode(file_get_contents('php://input'));
    $query = "insert into tbl_employee (emp_name,emp_email_address,emp_full_name)
              values('$data->emp_name','$data->emp_email_address','$data->emp_full_name')";

    $db->insert($query);
    echo 'You data is saved';


?>