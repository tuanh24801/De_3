<?php
    include './menu_footer/menu.php';
?>  
    <main class="container">

        <h2 class="mb-4 text-center">Chỉnh sửa thông tin bệnh nhân</h2>
        <form action="xulychinhsua.php?id=<?php echo $_GET['id'] ?>" method="post">
        <h1 class="mb-4 text-center"></h1>
            <?php
                function thongbao($tb){
                    echo '<p class="mb-4 text-center">'.$tb.'</p>';   
                }
                $id = $_GET['id'];
                include './config.php';
                $sql = "SELECT * FROM patientt WHERE patienid = '$id'";
                $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="form-group row">';
                            echo '<label for="firstname" class="col-sm-2 col-form-label">Họ</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="firstname" name="firstname" value = "'.$row['firstname'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="lastname" class="col-sm-2 col-form-label">Tên</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="lastname" name="lastname" value = "'.$row['lastname'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="dateofbirth" class="col-sm-2 col-form-label">Ngày sinh</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="dateofbirth" name="dateofbirth" value = "'.$row['dateofbirth'].'">';
                            echo '</div>';
                            echo '</div>';

                            if($row['gender'] == '1'){
                                $gender = 'Nam';
                            }else{
                                $gender = 'Nữ';
                            }
                            echo '<div class="form-group row">';
                            echo '<label for="gender" class="col-sm-2 col-form-label">Giới tói</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="gender" name="gender" value = "'.$gender.'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="mobile" class="col-sm-2 col-form-label">Di động</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="mobile" name="mobile" value = "'.$row['mobile'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="email" class="col-sm-2 col-form-label">Email</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="email" class="form-control mb-2" id="email" name="email" value = "'.$row['email'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="height" class="col-sm-2 col-form-label">Chiều cao</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="height" name="height" value = "'.$row['height'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="weight" class="col-sm-2 col-form-label">cân nặng</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="weight" name="weight" value = "'.$row['weight'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="blood_type" class="col-sm-2 col-form-label">Nhóm máu</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="blood_type" name="blood_type" value = "'.$row['blood_type'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="created_on" class="col-sm-2 col-form-label">Ngày tạo</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="created_on" name="created_on" disabled value = "'.$row['created_on'].'">';
                            echo '</div>';
                            echo '</div>';

                            echo '<div class="form-group row">';
                            echo '<label for="modified_on" class="col-sm-2 col-form-label">Ngày cập nhật</label>';
                            echo '<div class="col-sm-4">';
                            echo '<input type="text" class="form-control mb-2" id="modified_on" name="modified_on" disabled value = "'.$row['modified_on'].'">';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    
            ?>

            <br>
            <div class="form-group row">
                <label for="btn" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
            <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
        </form>
    </main>

<?php
    include './menu_footer/footer.php';
?>