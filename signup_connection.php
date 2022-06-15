<?php 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "quizhub";
$conn = mysqli_connect($server,$user,$password,$dbname);

$Name = $_POST['name'];
$Number = $_POST['number'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$Confirm_Password = $_POST['confirm_password'];

if($conn)
{
	echo "";
	{
		$query = "INSERT INTO signup(Name, M_Number, Email, Password, C_Password)values('$Name','$Number','$Email','$Password', '$Confirm_Password')";
		
		$sql = mysqli_query($conn,$query);
		if($sql)
		{
			echo "";
		}
		else
		{
			echo "data is not inserted";
		}
	}
}
else
{
	echo "connection failed";
}
?>
<html>
	<head>
		<title>signUp</title>
	</head>
	<body onload="loading()">
		<script>
			function loading()
            {
                window.location.href ="Quizz_start_page.php";
            }
		</script>
	</body>
</html>