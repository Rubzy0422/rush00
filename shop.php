<!DOCTYPE HTML>
<?php
require "header.php";
require "includes/dbh.inc.php";


if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="cart.php"</script>';
			}
		}
	}
}

?>

		<?php
		// update filter :)
		// $filter = "*";

		// $sql = "SELECT DISTINCT catagory FROM tbl_product ORDER BY catagory ASC";
		// $result = mysqli_query($conn, $sql);
		// 	if(mysqli_num_rows($result) > 0)
		// 	{
		// 		// create default of none
		// 		while($row = mysqli_fetch_array($result))
		// 		{
		// 			//onclick filter = (distinct catagory from menu);
		// 		}
		// 	}
		?>
		<div class="container">
		<?php
				$query = "SELECT * FROM tbl_product WHERE catagory=" . $filter . " ORDER BY id ASC";
				$result = mysqli_query($conn, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
					<div align="center">
						<img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						<h4 class="text-danger">R <?php echo $row["price"]; ?></h4>
						<input type="number" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
						<input type="submit" name="add_to_cart" value="Add to Cart" />
					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			
	</div>


<?php 
	require "footer.php";
?>