<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<?php
	session_start();
	$shop_username = $_SESSION["shop_username"];

	$servername = 'localhost';
		$username = 'root';
		$password = '';
		$dbname = 'grab';

		$conn = mysqli_connect($servername, $username, $password, $dbname);

		mysqli_set_charset($conn, "utf8");
		$sql="SELECT * FROM food WHERE (shop_username = '$shop_username');";

		if ($result=mysqli_query($conn,$sql))
  		{
  			// Return the number of rows in result set
  			$rowcount=mysqli_num_rows($result);
  			// Free result set
  			mysqli_free_result($result);
		  }
?>
</head>
<body>
	<form name="form1" method="post" action="add_data.php" enctype="multipart/form-data">
	<input type="text" hidden name="shop_username" value=<?php echo $shop_username ?>><br>
	name : <input type="text" name="food_name" value=""><br>
	size : <input type="text" name="food_size"><br>
	cash : <input type="text" name="food_cash"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>