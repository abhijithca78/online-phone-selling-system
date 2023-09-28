<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omss";
$uid=$_GET['uid'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{

	die("Connection failed because ".mysqli_connect_error());
}


	if(isset($_POST['sell']))
	{

		$bn = $_POST['product_name'];
		$category = $_POST['category']; 
		$qty = $_POST['available_quantity']; 
		$desc = $_POST['product_description'];     
		$price = $_POST['price'];
		$company = $_POST['company'];
		$phonefilename = $_FILES["phoneimage"]["name"];
        $tempname = $_FILES["phoneimage"]["tmp_name"];    
        $phonefolder = "C:/xampp/htdocs/omss/phone_image/".$phonefilename;

			$query = "INSERT INTO user_selled_phones(phone_name, phone_price, phone_qty, company_name, category, phone_image, uid) VALUES('$bn','$price', '$qty', '$company', '$category', '$phonefilename','$uid')";

			$data = mysqli_query($conn, $query);
			// Now let's move the uploaded image into the folder: image

			if($data && move_uploaded_file($tempname, $phonefolder))
			{
                echo '<script language="javascript">';
                echo 'alert("Successfully Updated"); location.href="http://localhost/omss/sell_phones.php?uid='.$uid.'"';
                echo '</script>';
			}
			else
			{
                echo '<script language="javascript">';
                echo 'alert("Not Updated"); location.href="http://localhost/omss/sell_phones.php?uid='.$uid.'"';
                echo '</script>';
			}
			mysqli_close($conn);
	}
	

?>