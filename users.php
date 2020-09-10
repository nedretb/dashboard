<?php
    include "db.php";

    $fullname = $_POST['fullname'];
    $idNumb = $_POST['jmb'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    if (!empty($fullname) || !empty($idNumb) || !empty($dob) || !empty($gender)){
        $x = new Db();
        $x->create($fullname, $idNumb, $dob, $gender);
        echo "Successfull addition";
    }
    else{
        echo "you need to enter all fields";
        die();
    }
?>