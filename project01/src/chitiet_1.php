<?php
    include './menu_footer/menu.php';
?>
    <h1 class="text-center">Chi tiết bệnh nhân</h1>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">ID </th>
                <th scope="col">Họ</th>
                <th scope="col">Tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Di động</th>
                <th scope="col">email</th>
                <th scope="col">Chiều cao</th>
                <th scope="col">Cân nặng</th>
                <th scope="col">Nhóm máu</th>
                <th scope="col">Ngày lập sổ</th>
                <th scope="col">Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './config.php';
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM patientt WHERE patienid = '$id'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['patienid'].'</th>';
                            echo '<td>'.$row['firstname'].'</td>';
                            echo '<td>'.$row['lastname'].'</td>';
                            echo '<td>'.$row['dateofbirth'].'</td>';
                            if($row['gender'] == '1'){
                                $gender = 'Nam';
                            }else{
                                $gender = 'Nữ';
                            }
                            echo '<td>'.$gender.'</td>';
                            echo '<td>'.$row['mobile'].'</td>';
                            echo '<td>'.$row['email'].'</td>';
                            echo '<td>'.$row['height'].'</td>';
                            echo '<td>'.$row['weight'].'</td>';
                            echo '<td>'.$row['blood_type'].'</td>';
                            echo '<td>'.$row['created_on'].'</td>';
                            echo '<td>'.$row['modified_on'].'</td>';
                            echo '</tr>';
                        }
                    }
                ?>
                <tr>
            </tbody>
        </table>
        <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
    </div>
<?php
    include './menu_footer/footer.php';
?>