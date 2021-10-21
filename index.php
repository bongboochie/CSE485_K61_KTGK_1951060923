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
    <?php
          if(isset($_SESSION['add']))
            {
              echo $_SESSION['add'];
              unset($_SESSION['add']);
            }
            
            if(isset($_SESSION['update']))
            {
              echo $_SESSION['update'];
              unset($_SESSION['update']);
            }

            if(isset($_SESSION['delete']))
            {
              echo $_SESSION['delete'];
              unset($_SESSION['delete']);
            }

?>
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
                        <td><a href="delete.php?reci_id=<?php echo $row['reci_id'];?>"><i class="fas fa-trash-alt"></i></a></td>
                        <td><a href="edit.php?reci_id=<?php echo $row['reci_id'];?>"><i class="fas fa-user-edit"></i></a></td>
                        
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