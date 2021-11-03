<?php
require_once("dbconn.php");
?>
<h1 class="txt-heading">Products</h1>
<button class="btn btn-warning">Clear Cart</button>
	<?php
    $id = $_POST['id'];
	$product = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
	if (!empty($product)) { 
		while($product_array= mysqli_fetch_array($product)){
	?>
	<form id="frmCart" >
	<div class="border">
		<div><img src="<?php echo $product_array["image"]; ?>" width="100" height="100" name="image"></div>
		<div><strong><?php echo $product_array["name"]; ?></strong></div>
		<div>Price:<?php echo " $ ".$product_array["price"]; ?></div>
		<div>Qty: <span><button>+</button><input type="number" name="" id="qty" value="1"><button>-</button></span></div>
		<div><input type="button" id="add" value="Add to cart"></div>
	</form>
	</div>
	<?php
			}
	}
	?>

</body>
</html>