<?php

include "dbconn.php";


$uid=$_GET['uid'];
$phoneid=$_GET['phoneid'];
$records = mysqli_query($conn,"DELETE cart.* FROM cart, products WHERE cart.phone_id = products.phoneid and cart.userid='$uid' and cart.phone_id='$phoneid'");
if($records)
{
    header("location: cart.php?uid=$uid");
}
?>