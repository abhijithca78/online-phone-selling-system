<?php
include "dbconn.php";
$id=$_GET['phoneid'];
$records = mysqli_query($conn,"SELECT * from products where phoneid='$id'"); // fetch data from database
$data = mysqli_fetch_array($records);
$price= $_GET['phone_price'];
$phonename=$data['phone_name'] ;
$phoneprice=$data['phone_price'] ;
$phoneimage=$data['phone_image'] ;
$uid=$_GET['uid'];
$cart=mysqli_query($conn,"SELECT * from cart where phone_id='$id' and userid='$uid'"); // fetch data from database
$cartdata = mysqli_fetch_array($cart);
$cartnum=mysqli_query($conn,"SELECT * FROM cart where userid='$uid'");
$cartnumdata=mysqli_num_rows( $cartnum);
/*echo $phonename ;
echo"<br>";
echo $phoneprice;
echo"<br>";
echo $phoneimage;
echo"<br>";
echo $id;
echo"<br>";
echo $uid;*/

if($cartdata>0)
{
    echo '<script type="text/javascript">';
    echo ' alert("already in the cart");location.href="product.php?uid='.$uid.'&num='.$cartnumdata.'"';  
    echo '</script>';

}
else
{
    $query = "INSERT INTO cart(phone_id, userid, qty) VALUES('$id','$uid', '0')";
    $data = mysqli_query($conn, $query);
    if($data)
    {
        header("location: product.php?uid=$uid&num=$cartnumdata");
    }
    else
    {
        echo "sorry something went wrong";
    }
}
?>