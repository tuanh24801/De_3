<?php
    $id = $_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dateofbirth = $_POST['dateofbirth'];
    $gender_text = $_POST['gender'];
    if($gender_text == "Nam"){
        $gender = '1';
    }else{
        $gender = '0';
    }
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $blood_type = $_POST['blood_type'];

    
    include './config.php';

    $sql = "UPDATE patientt SET firstname = '$firstname', lastname = '$lastname', dateofbirth = '$dateofbirth', gender = '$gender', 
            mobile = '$mobile', email = '$email', height = '$height' , weight = '$weight', blood_type = '$blood_type'
            WHERE patienid= '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        include './chinhsua.php';
        thongbao("Cập nhật thành công");
    }else{
        header('location: error.php');
    }



?>