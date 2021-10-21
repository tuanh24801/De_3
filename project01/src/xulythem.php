<?php
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
    
    $sql = "INSERT INTO patientt(firstname, lastname, dateofbirth, gender, mobile, email, height, weight, blood_type) 
                    VALUES ('$firstname','$lastname','$dateofbirth','$gender','$mobile','$email','$height','$weight', '$blood_type')";
    $result = mysqli_query($conn,$sql);
    if($result){
        include './them.php';
        thongbao('Thêm thành công');
    }else{
        echo 'Thêm thất bại';
    }


?>