<?php
    require('users.php');
    session_start();

    $x = $_SESSION['x'];

    $fullname = $_POST['fullname'];
    $idNumb = $_POST['jmb'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];

    if(isset($_POST['delete'])){
        $x->deleteUser($x->db_id);
        echo "User deleted successfully";
    }
    else if(isset($_POST['update'])){
        if(!empty($fullname)){
            $x->updateUser("full_name", $fullname, $x->db_id);
        }

        if(!empty($idNumb)){
            $x->updateUser("ID_NO", $idNumb, $x->db_id);
        }

        if(!empty($dob)){
            $x->updateUser("date_of_birth", $dob, $x->db_id);
        }

        if(!empty($gender)){
            $x->updateUser("Gender", $gender, $x->db_id);
        }
    }
?>