<?php
include('header.php');
?>
<main>
    <div class="container">
    <div class="d-flex justify-content-center">
    <h1 class=" ">Quản lí ngân hàng máu</h1>
</div>
<div class="container mt-5">
    <a class="btn btn-primary" href="add.php">Thêm </a>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">id</th>
        <th scope="col">Tên người nhận máu</th>
        <th scope="col">Tuổi</th>
        <th scope="col">Nhóm máu</th>
        <th scope="col">Lượng máu yêu cầu</th>
        <th scope="col">Giới tính</th>
        <th scope="col"> Ngày đăng kí nhận máu  </th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Xóa</th>
        <th scope="col">sửa</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include('config/config.php');
            $sql = "select * from blood_recipient";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $i++;
                    $name = $row['reci_name'];
                    $age = $row['reci_age'];
                    $bgrp = $row['reci_bgrp'];
                    $bqnty = $row['reci_bqnty'];
                    $sex = $row['reci_sex'];
                    $date = $row['reci_reg_date'];
                    $phno = $row['reci_phno'];?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $name ?></td>
                        <td><?php echo $age ?></td>
                        <td><?php echo $bgrp ?></td>
                        <td><?php echo $bqnty ?></td>
                        <td><?php echo $sex ?></td>
                        <td><?php echo $date ?></td>
                        <td><?php echo $phno ?></td>
                        <td><a href="delete.php"><i class="fas fa-trash-alt"></i></a></td>
                        <td><a href="<?php echo $row['']?>"><i class="fas fa-user-edit"></i></a></td>
                        
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
    </table>
</div>
    </div>
</main>

<?php
include('footer.php');
?>