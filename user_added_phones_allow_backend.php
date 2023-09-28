<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omss";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$aid = $_GET['aid'];

if(!$conn)
{

	die("Connection failed because ".mysqli_connect_error());
} // Using database connection file here

$id = $_GET['id']; // get id through query string

$allow = mysqli_query($conn,"INSERT INTO `products`(`phone_name`,`phone_price`,`phone_qty`,`company_name`,`category`,`phone_image`,`description`,`user_seller_id`) SELECT `phone_name`,`phone_price`,`phone_qty`,`company_name`,`category`,`phone_image`,`description`,`uid` FROM `user_selled_phones` WHERE `phone_id` = '$id';"); // delete query

if($allow)
{
    $query2 = mysqli_query($conn,"DELETE FROM `user_selled_phones` WHERE phone_id ='$id';");
    if($query2)
    {
        mysqli_close($conn); // Close connection
        echo '<script language="javascript">';
        echo 'alert("Successfully Added To Products"); location.href="http://localhost/omss/user_added_phones.php?aid='.$aid.'"';
        echo '</script>'; // redirects to all records page
        exit;
    }	
}
else
{
    mysqli_close($conn); // Close connection
    echo '<script language="javascript">';
    echo 'alert("Sorry Something Went Wrong"); location.href="http://localhost/omss/user_added_phones.php?aid='.$aid.'"';
    echo '</script>'; // redirects to all records page
    exit; // display error message if not delete
}
?>