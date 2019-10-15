<?php
	require 'header.php';
?>

	<?php
	if (isset($_POST['admin-submit']))
	{
		if (isset($_GET['error']))
		{
			if ($_GET['error'] == "emptyfields") {
				echo '<p class="error">Please Fill in all fields!</p>';
			}
			else if ($_GET['error'] == "invaliduidmail") {
				echo '<p class="error">Invalid username or email entered!</p>';
			}
			else if ($_GET['error'] == "invaliduid") {
				echo '<p class="error">Invalid username!</p>';
			}
			else if ($_GET['error'] == "invalidmail") {
				echo '<p class="error">Invalid email!</p>';
			}
			else if ($_GET['error'] == "emailtaken") {
				echo '<p class="error">This E-mail is allready in use!</p>';
			}
			else if ($_GET['error'] == "passwordcheck") {
				echo '<p class="error">Passwords do not match!</p>';
			}
			else if ($_GET['error'] == "usertaken") {
				echo '<p class="error">Username is already taken!</p>';
			}
		}
	?>

		<div class="container">

		<h1>Users</h1>
		<form action=<?php echo "./includes/admin/insert/user.php" ?> method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="email" name="mail" placeholder="E-mail">
				<input type= "password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Repeat password">
			<button type="submit" name="admin-user-insert" >Insert</button>
		</form>

		<form action=<?php echo "./includes/admin/update/user.php" ?> method="post">
			<input type="hidden" name="uid" value= "">
			<input type="email" name="mail" placeholder="E-mail">
			<input type= "password" name="pwd" placeholder="Password">
			<input type="password" name="pwd-repeat" placeholder="Repeat password">
			<button type="submit" name="admin-user-update" >Update</button>
		</form>

		<form action=<?php echo "./includes/admin/delete/user.php" ?> method="post" onSubmit="return confirm('Are you sure you want to delete this account?')">
				<input type="text" name="uid" value="">
			<button type="submit" name="admin-user-delete" >Delete</button>
		</form>
		</div>



		<div class="container">
		<h1>Orders</h1>
		<form action=<?php echo "./includes/admin/insert/order.php" ?> method="post">
		<!-- set orderer , quantity, productid -->
			<input type="text" name="orderer" placeholder="Orderer">
			<input type="number" name="quantity" value="" class="form-control" />
			<input type="number" name="productid" value="" class="form-control" />
			<button type="submit" name="admin-order-insert" >Insert</button>
		</form>
		<form action=<?php echo "./includes/admin/update/order.php" ?> method="post">
			<input type="text" name="orderer" placeholder="Orderer">
			<input type="number" name="quantity" value="" class="form-control" />
			<input type="number" name="productid" value="" class="form-control" />
			<button type="submit" name="admin-order-update" >Update</button>
		<!-- change orderer, quantity, productid -->
		</form>
		<form action=<?php echo "./includes/admin/delete/order.php" ?> method="post">
			<input type="text" name="orderer" placeholder="Orderer">
			<button type="submit" name="admin-order-delete" >Delete</button>
		<!-- Delete orderer, quantity, productid -->
		</form>
		</div>


		<div class="container">
		<h1>Items</h1>
		<form action=<?php echo "./includes/admin/insert/item.php" ?> method="post">
			<!-- set name image(save) price catagory-->
			<input type="text" name="name" placeholder="Name">
			<input type="image" name="image" placeholder="Image">
			<input type="number" step="any" name="price" placeholder="Price">
			<input type="text" name="catagory" placeholder="Catagory">
			<button type="submit" name="admin-item-insert" >Insert</button>
		</form>
		<form action=<?php echo "./includes/admin/update/item.php" ?> method="post">
			<input type="text" name="name" placeholder="Name">
			<input type="image" name="image" placeholder="Image">
			<input type="number" step="any" name="price" placeholder="Price">
			<input type="text" name="catagory" placeholder="Catagory">
			<button type="submit" name="admin-item-update" >Update</button>
			<!-- edit image(save) price catagory-->
		</form>
		<form action=<?php echo "./includes/admin/delete/item.php" ?> method="post">
			<!-- delete item-->
			<input type="text" name="name" placeholder="Name">
			<button type="submit" name="admin-item-delete" >Delete</button>
		</form>
		</div>

	<?php	
	}

	require 'footer.php';
?>