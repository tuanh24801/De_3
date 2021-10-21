<?php
    include './menu_footer/menu.php';
?>
    <h1 class="text-center">Quản lí bệnh viện</h1>
    <div class="container">
    <a href="them.php" class="btn btn-success mb-3"> Thêm bệnh nhân <i class="far fa-user-plus"></i></a>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                <th scope="col">ID </th>
                <th scope="col">Họ</th>
                <th scope="col">Tên</th>
                <th scope="col">Ngày sinh</th>
                <th scope="col">Giới tính</th>
                <th scope="col">chi tiết</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include './config.php';
                    $sql = "SELECT * FROM patientt";
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
                            echo '<td><a href = "chitiet_1.php?id='.$row['patienid'].'"><i class="fas fa-info-circle"></i></a></td>';
                            echo '<td><a href = "chinhsua.php?id='.$row['patienid'].'"><i class="fal fa-user-edit"></i></a></td>';
                            echo '<td><a href = "xoa.php?id='.$row['patienid'].'"><i class="far fa-user-minus"></i></a></td>';
                            echo '</tr>';
                        }
                    }
                ?>
                <tr>
            </tbody>
        </table>
    </div>
<?php
    include './menu_footer/footer.php';
?>