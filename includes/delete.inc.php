<!DOCTYPE HTML>
<?php
	if (isset($_POST['delete-submit']))
	{
		require 'dbh.inc.php';
		session_start();
		$username = htmlspecialchars($_POST['uid']);
		$sql = "DELETE FROM users WHERE uidUsers=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql))
		{
			header("Location: ../internal_error.php");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt, "s", $username);
			mysqli_stmt_execute($stmt);
			header("Location: logout.inc.php");
			exit();
		}
	}
?>