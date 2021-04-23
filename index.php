<?php 
require_once("header.php");
include('dbconfig.php');

$columns = array('product_name','price');

$column = isset($_GET['column']) && in_array($_GET['column'], $columns) ? $_GET['column'] : $columns[0];

$sort_order = isset($_GET['order']) && strtolower($_GET['order']) == 'desc' ? 'DESC' : 'ASC';

if ($sresult = $con->query('SELECT * FROM ad_details ORDER BY ' .  $column . ' ' . $sort_order)) {

$asc_or_desc = $sort_order == 'ASC' ? 'desc' : 'asc';
?>

<section class="main-body">
			<div class="hero_title">
                    <h2>All Products</h2>
                    <ul class="nav nav-sort">                     
                      <li class="dropdown ml-auto">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-filter"></i> Sort by</a>
                        <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?column=product_name&order=<?php echo $asc_or_desc; ?>">Product name <i style="padding-left: 10px  ; padding-right: 5px;" class="fas fa-sort-alpha-up"></i><i class="fas fa-sort-alpha-down-alt"></i></a>
                            
                            <a class="dropdown-item" href="?column=price&order=<?php echo $asc_or_desc; ?>">Price <i style="padding-left: 10px  ; padding-right: 5px;" class="fas fa-sort-numeric-up"></i><i class="fas fa-sort-numeric-down-alt"></i></a>                    
                          </div>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

			<table class="table table-striped">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">Seller Info</th>
			      <th scope="col">Full Name</th>
			      <th scope="col">Full Address</th>
			      <th scope="col">Phone No.</th>
			      <th scope="col">Product Info</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Price</th>
			      <th scope="col">Brand</th>
			      <th scope="col">New/Used</th>
			    </tr>
			  </thead>
			  <tbody>
			  	      <?php  
                 
                 // Fetch while loop
                 $selectquery = "SELECT * FROM ad_details";
                 $query = mysqli_query($con, $selectquery);
                       
                 while ($result = mysqli_fetch_array($query)) {

                  // Sort while loop
                 while ($result = mysqli_fetch_array($sresult)){
                ?>
			    <tr>
			      <td><?php echo $result['seller_info']; ?></td>
			      <td><?php echo $result['seller_name']; ?></td>
			      <td><?php echo $result['full_address']; ?></td>
			      <td><?php echo $result['phone_no']; ?></td>
			      <td><?php echo $result['product_info']; ?></td>
			      <td><?php echo $result['product_name']; ?></td>
			      <td><?php echo $result['price']; ?></td>
			      <td><?php echo $result['brand']; ?></td>
			      <td><?php echo $result['product_type']; ?></td>
			    </tr>
			    <?php
                  }
              }                    
          ?>  
			  </tbody>
			</table>

      <?php
}

?>

</section>

<?php 
require_once("footer.php");
?>


