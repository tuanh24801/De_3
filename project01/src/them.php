<?php
    include './menu_footer/menu.php';
?>  
    <main class="container">

        <h2 class="mb-4 text-center">Thêm thông tin bệnh nhân</h2>
        <?php
            function thongbao($tb){
                echo '<p class="mb-4 text-center">'.$tb.'</p>'; 
            }
        ?>
        <form action="xulythem.php" method="post">
            <div class="form-group row">
                <label for="firstname" class="col-sm-2 col-form-label">Họ</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="firstname" name="firstname">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="lastname" class="col-sm-2 col-form-label">Tên</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="lastname" name="lastname">
                </div>
            </div>
            <div class="form-group row">
                <label for="dateofbirth" class="col-sm-2 col-form-label">Ngày sinh</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control mb-2" id="dateofbirth" name="dateofbirth">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label">Giới tính</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="gender" name="gender">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-2 col-form-label">Di động</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="mobile" name="mobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control mb-2" id="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="height" class="col-sm-2 col-form-label">Chiều cao</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="height" name="height">
                </div>
            </div>
            <div class="form-group row">
                <label for="weight" class="col-sm-2 col-form-label">Cân nặng</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="weight" name="weight">
                </div>
            </div>
            <div class="form-group row">
                <label for="blood_type" class="col-sm-2 col-form-label">Nhóm máu</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" id="blood_type" name="blood_type">
                </div>
            </div>
    
            <div class="form-group row">
                <label for="empPosition" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Thêm thông tin</button>
                </div>
            </div>
        </form>
            <a href="index.php" class="btn btn-success mb-3"><i class="fad fa-chevron-square-left"></i> Quay lại</a>
        
    </main>

<?php
    include './menu_footer/footer.php';
?>