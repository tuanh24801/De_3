<?php
    $id = $_GET['id'];
    include './config.php';
    $sql = "DELETE FROM patientt WHERE patienid = '$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: index.php');
    }else{
        echo 'xóa thất bại';
    }

?>