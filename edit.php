<?php
include('header.php');
 ?>
 
<div class="m-auto" style="width:40%;">
<?php
                if(isset($_GET['reci_id']))
                {
                    $id = $_GET['reci_id'];
                    $sql= "SELECT * FROM blood_recipient WHERE reci_id='$id'";
                    $query= mysqli_query($conn,$sql);

                    #lấy ra 1 dongf
                    $row= mysqli_fetch_assoc($query);
                }
            ?>
    <form action="" method="POST">
    <div class="mb-3">
        <label for="inputname" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['reci_name']; ?>" id="inputname">
    </div>
    <div class="mb-3">
        <label for="inputage" class="form-label">Tuổi</label>
        <input type="text" class="form-control" name="age" value="<?php echo $row['reci_age']; ?>" id="inputage">
    </div>
    <div class="mb-3">
        <label for="inputbgrp" class="form-label">Nhóm máu</label>
        <input type="text" class="form-control" name="bgrp" value="<?php echo $row['reci_bgrp'] ;?>" id="inputbrgp">
    </div>
    <div class="mb-3">
        <label for="inputbqnty" class="form-label">Số máu yêu cầu</label>
        <input type="text" class="form-control" name="bqnty" value="<?php echo $row['reci_bqnty'] ;?>" id="inputbqnty">
    </div>
    <div class="mb-3">
        <label for="inputsex" class="form-label">Giới tính</label>
        <select class="form-control" name="sex" id="inputsex">
        <option value="Nam"
            <?php echo $row['reci_sex']=='Nam'?' selected="selected"':'' ?>>Nam
        </option>
        <option value="Nữ"
            <?php echo $row['reci_sex']=='Nữ'?' selected="selected"':'' ?>>Nữ
        </option>
        </select>
    </div>
    <div class="mb-3">
        <label for="inputphno" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" name="phno" value="<?php echo $row['reci_reg_date']; ?>" id="inputphno">
    </div>
    <div class="d-flex justify-content-center mt-3">
        <button type="submit" name="submit"  class="btn btn-primary">Sửa</button>
    </div>
    </form>
</div>

<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $bgrp = $_POST['bgrp'];
        $bqnty = $_POST['bqnty'];
        $sex = $_POST['sex'];
        $phno = $_POST['phno'];

        $sql1 = "update blood_recipient set
                reci_name = '$name',
                reci_age = $age,
                reci_bgrp = '$bgrp',
                reci_bqnty = $bqnty,
                reci_sex = '$sex',
                reci_phno = '$phno'
                where reci_id = $id";
        $result = mysqli_query($conn, $sql1)  ;
        if($result == TRUE){
            $_SESSION['update'] = "<div class='text-success'>Sửa thông tin thành công.</div>";
            header('location:'.SITEURL.'index.php');
        }else{
            $_SESSION['update'] = "<div class='text-danger'>lỗi khi sửa thông tin.</div>";
            header('location:'.SITEURL.'error.php');
        }
    }
?>

<?php
include('footer.php');
?>