<?php
include('config/config.php');
?>
<?php
   //lấy id là manv
    $id = $_GET['reci_id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM blood_recipient WHERE reci_id=$id";

    //Execute the Query
    $result = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($result==true)
    {           
        $_SESSION['delete']="<div class='text-success'>success</div>";
        header('location:'.SITEURL.'index.php');
    }
    else
    {
        $_SESSION['delete']="<div class='text-danger'>fail.</div>";
        header('location:'.SITEURL.'error.php');
    }

?>

<?php
include('footer.php');
?>