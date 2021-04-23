<?php 
require_once("header.php");
include('dbconfig.php');
?>

<section class="main-body">
	<div class="hero_title">
                    <h2>Edit Ad:</h2> 
                    <!-- Fetching Data -->
                    <?php
					if (isset($_POST['edit_btn'])) {
						$p_id = $_POST['edit_id'];
						$editquery = "SELECT * FROM ad_details WHERE id='$p_id' ";
						$query = mysqli_query($con, $editquery);

						foreach ($query as $result) 
						{
					?>      
					<form method="post" action="code.php">
					<input type="hidden" name="edit_id" value="<?php echo $result['id'];?>">
				  	<div class="form-row">
				    <div class="form-group col-md-4">
				      <label for="inputsellerinfo">Seller Info</label>
				      <input type="text" class="form-control" id="inputsellerinfo" name="e_sellerinfo" value="<?php echo $result['seller_info'];?>" required>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputname">Full Name</label>
				      <input type="text" class="form-control" id="inputname"  name="e_fullname" value="<?php echo $result['seller_name'];?>" required>
				    </div>
				     <div class="form-group col-md-4">
				      <label for="inputnumber">Phone</label>
				      <input type="text" class="form-control" id="inputnumber"  name="e_phone" value="<?php echo $result['phone_no'];?>" required>
				    </div>
				  	</div>
				  	<div class="form-group">
				    <label for="inputaddress">Full Address</label>
				    <input type="textarea" rows="3" class="form-control" id="inputaddress" name="e_fulladdress" value="<?php echo $result['full_address'];?>" required>
				  	</div>
				  	<div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputprodinfo">Product Info</label>
				      <input type="text" class="form-control" id="inputprodinfo"  name="e_productinfo" value="<?php echo $result['product_info'];?>" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputprodname">Product Name</label>
				      <input type="text" class="form-control" id="inputprodname"  name="e_productname" value="<?php echo $result['product_name'];?>" required>
				    </div>
				  	</div>
				  	<div class="form-row">
				    <div class="form-group col-md-5">
				      <label for="inputprice">Price</label>
				      <input type="text" class="form-control" id="inputprice"  name="e_price" value="<?php echo $result['price'];?>" required>
				    </div>
				     <div class="form-group col-md-3">
				      <label for="inputbrand">Brand</label>
				      <input type="text" class="form-control" id="inputbrand"  name="e_brand" value="<?php echo $result['brand'];?>" required>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">New/Used</label>
				      <select id="inputState" class="form-control" name="e_options" value="<?php echo $result['product_type'];?>" required>
				        <option>New</option>
				        <option>Used</option>
				      </select>
				    </div>
					</div>		
        			<button type="submit" name="product_update_btn" class="btn btn-primary"> UPDATE</button>
			        <a href="myads.php" class="btn btn-danger"> CANCEL</a>
					</form>
					<?php		
						}
					}
					?>
					</div>
</section>

<?php 
require_once("footer.php");
?>


