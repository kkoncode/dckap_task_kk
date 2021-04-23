<?php 
require_once("header.php");
include('dbconfig.php');
?>


<section class="main-body">
			<h2>My Ads</h2>
			<table class="table table-striped" id="myadstable">
			  <thead class="thead-dark">
			    <tr>
		            <th scope="col">Id</th>
					<th scope="col">Seller Info</th>
		            <th scope="col">Full Name</th>
		            <th scope="col">Full Address</th>
		            <th scope="col">Phone No.</th>
		            <th scope="col">Product Info</th>
		            <th scope="col">Product Name</th>
		            <th scope="col">Price</th>
		            <th scope="col">Brand</th>
		            <th scope="col">New/Used</th>
		            <th scope="col">Edit</th>
		            <th scope="col">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
          		<?php                  
                 // Fetch while loop
                 $selectquery = "SELECT * FROM ad_details";
                 $query = mysqli_query($con, $selectquery);                    
                 while ($result = mysqli_fetch_array($query)) {                
                ?>
			    <tr>
	            <td><?php echo $result['id']; ?></td>
				<td><?php echo $result['seller_info']; ?></td>
	            <td><?php echo $result['seller_name']; ?></td>
	            <td><?php echo $result['full_address']; ?></td>
	            <td><?php echo $result['phone_no']; ?></td>
	            <td><?php echo $result['product_info']; ?></td>
	            <td><?php echo $result['product_name']; ?></td>
	            <td><?php echo $result['price']; ?></td>
	            <td><?php echo $result['brand']; ?></td>
	            <td><?php echo $result['product_type']; ?></td>
			    <td><form method="POST" action="editpost.php">    
	            <input type="hidden" name="edit_id" value="<?php echo $result['id']; ?>">
	            <button type ="submit" name="edit_btn" class="btn btn-success"><i class="fa fa-edit"></i></button>
	            </form>
	            </td>
			      <td><form method="POST" action="code.php">
	            <input type="hidden" name="delete_id" value="<?php echo $result['id']; ?>">
	            <button type ="submit" name="delete_btn" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	            </form>
	            </td>
			    </tr>
		          <?php		            	
		            }                    
          		  ?>  			    
			  </tbody>
			</table>


</section>

<?php 
require_once("footer.php");
?>


