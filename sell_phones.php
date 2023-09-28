<?php
session_start();
?>

<?php
 if(!isset($_SESSION['uname']))
 {
     echo "you are logged out login again";
     header('location: userlogin.php');
 }
 include "dbconn.php"; // Using database connection file here

$uid=$_GET['uid'];
?>




<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell phones </title>

    <link rel="stylesheet" href="./css/grid.css">
    <link rel="stylesheet" href="./css/app.css">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<form action="http://localhost/omss/sell_phones_code.php?uid=<?php echo $uid ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
  <?php
                    if(isset($_SESSION['uname']))
                    {
                      echo $_SESSION['status'];
                      echo $_SESSION['uname'];
                      
                    }
                ?>
<fieldset>
                    <!-- ORDERS TABLE -->
                    <div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PHONE NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md" required type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
  <label for="cars">Choose a category:</label>
  <select required name="category" id="category">
    <option value="Android">Android</option>
    <option value="iOS">iOS</option>
  </select>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="available_quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required type="number">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>
  <div class="col-md-4">                     
    <textarea required class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">PRICE</label>  
  <div class="col-md-4">
  <input id="online_date" name="price" placeholder="ONLINE DATA" class="form-control input-md" required type="number">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="company">company</label>  
  <div class="col-md-4">
  <input id="company" name="company" placeholder="company" class="form-control input-md" required type="text">
    
  </div>
</div>
    
 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">phone image</label>
  <div class="col-md-4">
    <input required id="filebutton" name="phoneimage" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label" for="singlebutton">SUBMIT</label>
  <div class="col-md-4">
    <button id="singlebutton" name="sell" class="btn btn-primary">ADD</button>
  </div>
  </div>

</fieldset>