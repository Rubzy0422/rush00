<?php
	if (isset($_POST['order-submit']))
	{
		require 'dbh.inc.php';
		session_start();
	
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			print_r($values);
		}
		
		echo '<script>window.location.href="cart.php?action=clear_cart"</script>';
		header("Location: ../cart.php?checkout=success");
		exit();
	}
	else 
	{
		header("Location: ../cart.php");
		exit();
	}