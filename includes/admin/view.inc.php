<?php 
	require '../dbh.inc.php';

	if (isset($_POST['sql']))
	{
		if ($_POST['sql'] == "tbl_product")
		{
			$sql = "SELECT * FROM tbl_product";
			$stmt = mysqli_stmt_init($conn);
			mysqli_stmt_prepare($stmt, $sql);
			$tabname = "users";
			mysqli_stmt_bind_param($stmt, "s", $tabname);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		
			echo "<table>
			<tr>
				<th>Product ID</th>
				<th>Product name</th>
				<th>Product image</th>
				<th>Product Price</th>
				<th>Product Catagory</th>
			</tr>";
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>" . $row['id'] . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['image'] . "</td>";
				echo "<td>" . $row['price'] . "</td>";
				echo "<td>" . $row['catagory'] . "</td></tr>";
			}
			echo "</table>";
		}
		else if ($_POST['sql'] == "orders")
		{
			$sql = "SELECT * FROM ordered_items";
			$stmt = mysqli_stmt_init($conn);
			mysqli_stmt_prepare($stmt, $sql);
			$tabname = "ordered_items";
			mysqli_stmt_bind_param($stmt, "s", $tabname);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		
			echo "<table>
			<tr>
				<th>Orderer name</th>
				<th>Quantity</th>
				<th>Product Id</th>
			</tr>";
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr><td>" . $row['orderer'] . "</td>";
				echo "<td>" . $row['quantity'] . "</td>";
				echo "<td>" . $row['product_id'] . "</td></tr>";
			}
			echo "</table>";
		}
		else if ($_POST['sql'] == "users")
		{
			$sql = "SELECT * FROM users";
			$stmt = mysqli_stmt_init($conn);
			mysqli_stmt_prepare($stmt, $sql);
			$tabname = "users";
			mysqli_stmt_bind_param($stmt, "s", $tabname);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		
			echo "<table>
			<tr>
				<th>User ID</th>
				<th>User Username</th>
				<th>User E-mail</th>
				<th>User password</th>
			</tr>";
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>
				<td>" . $row['idUsers'] . "</td>";
				echo "<td>" . $row['uidUsers'] . "</td>";
				echo "<td>" . $row['emailUsers'] . "</td>";
				echo "<td>" . $row['pwdUsers'] . "</td>
				</tr>";
			}
			echo "</table>";
		}
	}