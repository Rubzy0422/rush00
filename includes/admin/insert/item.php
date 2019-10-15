<?php
	if (isset($_POST['admin-item-insert']))
	{
		echo $_POST['name'];
		echo $_POST['image'];
		echo $_POST['price'];
		echo $_POST['catagory'];
	} else 
	echo "not set";