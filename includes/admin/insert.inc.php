<?php
	require '../dbh.inc.php';
	require 'admin.nav.php';

if (isset($_POST['sql']))
{
	if ($_POST['sql'] == "tbl_product")
	{
		echo "<h1>delete items</h1>";
		require 'view.inc.php';
	}
	else if ($_POST['sql'] == "orders")
	{
		echo "<h1>delete orders</h1>";
		require 'view.inc.php';
	}
	else if ($_POST['sql'] == "users")
	{
		echo "<h1>delete users</h1>";
		require 'view.inc.php';
	}
}