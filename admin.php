<?php
	require 'header.php';
?>

	<?php
	if (isset($_POST['admin-submit']))
	{

		?>
		<h1>insert</h1>
		<form action=<?php echo "./includes/admin/insert.inc.php" ?> method="post">
			<button type="submit" name="sql" value="tbl_product">Items</button>
			<button type="submit" name="sql" value="orders">Orders</button>
			<button type="submit" name="sql" value="users">users</button>
		</form>
		<h1> Update </h1>
		<form action=<?php echo "./includes/admin/update.inc.php" ?> method="post">
			<button type="submit" name="sql" value="tbl_product">Items</button>
			<button type="submit" name="sql" value="orders">Orders</button>
			<button type="submit" name="sql" value="users">users</button>
		</form>
		<h1> Delete </h1>
		<form action=<?php echo "./includes/admin/delete.inc.php" ?> method="post">
			<button type="submit" name="sql" value="tbl_product">Items</button>
			<button type="submit" name="sql" value="orders">Orders</button>
			<button type="submit" name="sql" value="users">users</button>
		</form>
	<?php	
	}

	require 'footer.php';
?>