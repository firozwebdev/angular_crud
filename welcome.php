<?php
    include('config/config.php');
    include('lib/Database.php');
    $db= new Database();

    $data = json_decode(file_get_contents('php://input'));
    $query = "Insert into tbl_student(student_name) values('$data->name')";
    $db->insert($query);
    echo 'Your data is saved';

