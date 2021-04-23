<?php 
require_once("header.php");
?>

<section class="main-body">
	<div class="hero_title">
                    <h2>Post your ad here:</h2>       
					<form method="post" action="code.php">
				  <div class="form-row">
				    <div class="form-group col-md-4">
				      <label for="inputsellerinfo">Seller Info</label>
				      <input type="text" class="form-control" id="inputsellerinfo" placeholder="Seller Info" name="sellerinfo" required>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputname">Full Name</label>
				      <input type="text" class="form-control" id="inputname" placeholder="Full Name" name="fullname" required>
				    </div>
				     <div class="form-group col-md-4">
				      <label for="inputnumber">Phone</label>
				      <input type="text" class="form-control" id="inputnumber" placeholder="Phone number" name="phone" required>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputaddress">Full Address</label>
				    <textarea type="textarea" rows="3" class="form-control" id="inputaddress" placeholder="1234 St. Apartment, studio, or floor" name="fulladdress" required></textarea>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputprodinfo">Product Info</label>
				      <input type="text" class="form-control" id="inputprodinfo" placeholder="Product Info" name="productinfo" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputprodname">Product Name</label>
				      <input type="text" class="form-control" id="inputprodname" placeholder="Product Name" name="productname" required>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-5">
				      <label for="inputprice">Price</label>
				      <input type="text" class="form-control" id="inputprice" placeholder="Price" name="price" required>
				    </div>
				     <div class="form-group col-md-3">
				      <label for="inputbrand">Brand</label>
				      <input type="text" class="form-control" id="inputbrand" placeholder="Brand" name="brand" required>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputState">New/Used</label>
				      <select id="inputState" class="form-control" name="options" required>
				        <option>New</option>
				        <option>Used</option>
				      </select>
				    </div>

				  </div>
				  
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				  </form>
				</div>
</section>

<?php 
require_once("footer.php");
?>


