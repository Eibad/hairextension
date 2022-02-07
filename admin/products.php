<?php
include "../connection.php";
session_start();

if(count($_SESSION) == 0){
	header("location:index.php");	
}
$product_name = "";
$product_price = "";
$product_label_price = "";
$product_description = "";
$update = false;
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$update = true;
	$record = mysqli_query($conn, "SELECT * FROM table_products WHERE product_id = $id");

		$res = mysqli_fetch_array($record);
		$product_name = $res['product_name'];
		$product_id = $res['product_id'];
	$product_price = $res['product_price'];
	$product_label_price = $res['product_label_price'];
	$product_description = $res['product_description'];

}

//echo "<pre>";print_r($_SESSION);die;
if(isset($_POST['save'])){
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_label_price = $_POST['product_label_price'];
	$product_description = htmlentities($_POST['product_description']);

	$product_image = basename($_FILES['image']['name']);

	$sql = "INSERT INTO table_products (product_name,product_price,product_label_Price,product_description,product_image) VALUES ('$product_name','$product_price','$product_label_price','$product_description','$product_image')";
	if(!$update){
		mysqli_query($conn,$sql);
		$status = true;
		$msg = "Product Inserted";
	}
	else {
		$status = false;
		$msg = "Error Found";
	}
}

if (isset($_POST['update'])) {
	$product_id = $_POST['product_id'];
	echo $product_id;

	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_label_price = $_POST['product_label_price'];
	$product_description = htmlentities($_POST['product_description']);
	$product_image = basename($_FILES['image']['name']);

	$sqlUpdate = "UPDATE table_products set product_name = '$product_name' ,product_price = '$product_price' ,product_label_Price = '$product_label_price' ,product_description = '$product_description' ,product_image = '$product_image' WHERE product_id = '$product_id'";
	echo mysqli_query($conn,$sqlUpdate); 
	$msg = "Product Updated";
	header("location:products.php");
}


$product_sql ="SELECT * FROM table_products";
$product_result = mysqli_query($conn,$product_sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Management</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
</head>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

</style>
<body>
<ul>
  <li>Admin Panel</li>
  <li style="float:right"><a href="signout.php">Logout</a></li>
</ul>
	<div class="container-fluid" style="margin-top: 2%">
  		<div class="row">
  			<div class="col-md-4">

  				<?php 
  				if(isset($status)) {
	  				if($status == TRUE){?>
						<div class="alert alert-success">
							<strong>Success!</strong> <?php echo $msg;?>
						</div>
					<?php  
					}
					else {?>
						<div class="alert alert-danger">
							<strong>Error!</strong> <?php echo $msg;?>
						</div>
					<?php 
					}
				}
				?>


	  			<form action="products.php" enctype="multipart/form-data" method="POST">
				  
				  <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

				  	<div class="form-group">
				    	<label for="email">Product Name:</label>
				    	<input type="text" name="product_name" required class="form-control" placeholder="Product Name" value="<?php echo $product_name; ?>">
				  	</div>

				  	<div class="form-group">
				    	<label for="email">Product Original Price:</label>
				    	<input type="text" name="product_price" required class="form-control" placeholder="Product price" value="<?php echo $product_price; ?>">
				  	</div>

				  	<div class="form-group">
				    	<label for="email">Product Discounted Price:</label>
				    	<input type="text" name="product_label_price" required class="form-control" placeholder="Product Price" value="<?php echo $product_label_price; ?>">
				  	</div>

				  	<div class="form-group">
				    	<label for="email">Product Description:</label>
				    	<textarea name="product_description" required class="form-control" placeholder="Product Description" value="<?php echo $product_description; ?>"></textarea>
				  	</div>

				  	<div class="form-group">
				    	<label for="email">Product Image:</label>
				    	
                                                                <input type="file" name="image" accept="image/*" onchange="loadFile(event)">
                                                                    <img id="output"/ style="height:100px; width:100px;" >
                                                                        <script>
                                                                        var loadFile = function(event) {
                                                                            var output = document.getElementById('output');
                                                                            output.src = URL.createObjectURL(event.target.files[0]);
                                                                        };
                                                                        </script>
                                                                </div>
																<?php if ($update == true): ?>
																<button type="submit"  name="update" class="btn btn-default">Update Product</button>
																<?php else: ?>
				 													 <button type="submit" name="save" class="btn btn-default">Add Product</button>
																	  <?php endif ?>
	
				</form>
			</div>

			<div class="col-md-6">
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>ID</th>
				        <th>Name</th>
				        <th>Price</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				    	<?php
					    if(mysqli_num_rows($product_result) > 0)
					    {
					    	while($row = mysqli_fetch_array($product_result))
					        {
					        ?>
						      <tr>
						        <td>2</td>
						        <td><?php echo $row['product_name'];?></td>
						        <td><?php echo $row['product_price'];?></td>
						        <td>
						        	<a href="products.php?id=<?php echo $row['product_id'];?>" class="btn btn-primary">Edit</a>
						        	<a href="delete.php?id=<?php echo $row['product_id'];?>" class="btn btn-danger delete_this_item">Delete</a>
						        </td>
						      </tr>
						    <?php 
							}
						}
						?>

				      
				    </tbody>
				  </table>
			</div>
		</div>
	</div>

</body>
</html>