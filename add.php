<?php
include './header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <center>  <a href="./view.php" class="btn btn-primary view-btn">view Product</a></center>
<!-- add product form -->
<form class="row g-3" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="pname">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Product Price</label>
    <input type="number" class="form-control" id="inputPassword4" name="pprice">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Product Image</label>
    <input type="file" class="form-control" id="inputAddress" name="pimage">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Product Details</label>
    <input type="text" class="form-control" id="inputAddress2" name="pdetails">
  </div>
  <div class="col-12 d-grid gap-2">
    <button name="submit" type="submit" class="btn btn-primary">Add Product</button>
  </div>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    include './dbcon.php';
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimage = "products/" . $_FILES['pimage']['name'];
    move_uploaded_file($_FILES['pimage']['tmp_name'], $pimage);
    $pdetails = $_POST['pdetails'];

    $ins = "insert into fetch_img (pname, pprice, pdetails, pimage ) values ('$pname', '$pprice', '$pdetails', '$pimage')";
    $add = mysqli_query($con, $ins);
?>
<div class="alert">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
</svg>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Product Sucessfully Added!!!
  </div>
</div>
</div>
  <?php 
}
?>