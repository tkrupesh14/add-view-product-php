<?php
include './dbcon.php';
$id = $_GET['i'];
$del = "delete from fetch_img where pid = $id";
$query = mysqli_query($con, $del);
if($con->query($del)=== TRUE){
  echo "<script>alert('Product deleted');
   </script>";
  header('location: view.php');
    
    
}else{
    echo "<script>alert('not deleted');</script><br>";
}
?>