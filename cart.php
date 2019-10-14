<?php
require "header.php";


if($_GET["action"] == "clear_cart")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>window.location="cart.php"</script>';
		}
		echo '<script>alert("cart cleared!")</script>';
	}
?>

	<main>
		<div class="wrapper-main">
		<?php
		if (isset($_GET['checkout']))
					{
						if ($_GET['checkout'] == "success") {
							echo '<p class="success">Your order has been set!</p>';
						}
					}
		?>
			<section class="section-default">
				<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>R <?php echo $values["item_price"]; ?></td>
						<td>R <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="shop.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">R <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
				<?php
				if(!empty($_SESSION["shopping_cart"]))
				{
					echo '<button onclick="window.location.href=\'cart.php?action=clear_cart\'"><span class=\'text-danger\'>Clear Cart</span></button>
					<form action="/includes/order.inc.php" method="POST">
						<button class="checkout-btn" type="submit" name="order-submit" onclick="return confirm(\'Are you sure you want to checkout?\');">Checkout</button>
					</form>';
				}
				else
				{
					echo '<h1>Cart is empty</h1>';
				}
				?>
				
		</div>
		</section>
	</main>
	
<?php 
	require "footer.php";
?>