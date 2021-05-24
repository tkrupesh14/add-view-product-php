<?php
include './header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View | E-Commerce</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<center> <a href="./add.php" class="btn btn-primary view-btn">Add Product</a></center>

</body>
</html>
<?php
include './dbcon.php';
$sel = "select * from fetch_img";
$selq = mysqli_query($con, $sel);

while ($result = mysqli_fetch_assoc($selq)){
?>
<table border=3 width="100%" cellspacing="5" cellpadding="5" style="margin-top: 20px;">
   <tr border = 1>
       <th> Name</th>
       <th> Price</th>
       <th> Image</th>
       <th> Details</th>
       <th>Delete</th>
   </tr>
   <tr border =4>
       <td><?php echo $result ['pname'] ?></td>
       <td><?php echo "&#8377;". $result ['pprice'] ?></td>
       <td><img src="<?php echo $result ['pimage'] ?>" alt="" width="70px" height="100px"></td>
       <td><?php echo $result ['pdetails'] ?></td>
       <td><?php echo "<a href='delete.php?i=$result[pid]' style='color:red;'><i class='fas fa-trash-alt'></i></a>"; ?></td>
   </tr>
</table>
<?php
}
?>
