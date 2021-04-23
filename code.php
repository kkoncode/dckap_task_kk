<?php 

// connection to database
include('dbconfig.php');

// CREATE OPERATION
if(isset($_POST['submit']))
{
	$seller_info 	= $_POST['sellerinfo'];
	$seller_name 	= $_POST['fullname'];
	$full_address 	= $_POST['fulladdress'];
	$phone_no 		= $_POST['phone'];
	$product_info 	= $_POST['productinfo'];
	$product_name 	= $_POST['productname'];
	$price 			= $_POST['price'];
	$brand 			= $_POST['brand'];
	$product_type 	= $_POST['options'];
		
	$insertquery = "INSERT INTO ad_details(seller_info, seller_name, full_address, phone_no, product_info, product_name, price, brand, product_type) VALUES ('$seller_info', '$seller_name', '$full_address', '$phone_no', '$product_info', '$product_name', '$price', '$brand', '$product_type' )";
	$query = mysqli_query($con, $insertquery);

	if ($query) 
		{			
			header('Location: index.php');
		}
	else{
		?><h1> <?php echo 'DATA NOT INSERTED'; ?> </h1> <?php
	}		
}

// END OF CREATE OPERATION

// DELETE OPERATION

if (isset($_POST['delete_btn'])) 
{
	$id = $_POST['delete_id'];
	$deletequery = "DELETE FROM ad_details WHERE id = '$id' ";
	$dquery = mysqli_query($con, $deletequery);

	if ($dquery)
	{
		header('Location: myads.php');
	}
	else{
		?><h1> <?php echo 'DATA NOT DELETED'; ?> </h1> <?php
	}
}
// END OF DELETE OPERATION


// UPDATE OPERATION

if (isset($_POST['product_update_btn'])) 
{	
	$edit_id 		= $_POST['edit_id'];
	$e_seller_info 	= $_POST['e_sellerinfo'];
	$e_seller_name 	= $_POST['e_fullname'];
	$e_full_address = $_POST['e_fulladdress'];
	$e_phone_no 	= $_POST['e_phone'];
	$e_product_info = $_POST['e_productinfo'];
	$e_product_name = $_POST['e_productname'];
	$e_price 		= $_POST['e_price'];
	$e_brand 		= $_POST['e_brand'];
	$e_product_type = $_POST['e_options'];
			
	$updatequery = "UPDATE ad_details SET seller_info='$e_seller_info', seller_name='$e_seller_name', full_address='$e_full_address', phone_no='$e_phone_no', product_info='$e_product_info', product_name='$e_product_name', price='$e_price', brand='$e_brand', product_type='$e_product_type'  WHERE id ='$edit_id' ";
	$uquery = mysqli_query($con, $updatequery);

	if ($uquery) 
		{				
			header('Location: myads.php');
		}
	else{
		?><h1> <?php echo 'DATA NOT UPDATED'; ?> </h1> <?php
	}
}

// END OF UPDATE OPERATION