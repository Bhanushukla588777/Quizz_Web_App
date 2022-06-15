<?php 
$server = "localhost";
$user = "root";
$password = "";
$dbname = "quizhub";
$conn = mysqli_connect($server,$user,$password,$dbname);

$Names = $_POST['name'];
$Email = $_POST['email'];
$Mobile = $_POST['number'];
$Message = $_POST['message'];

if($conn)
{
	echo "";
	{
		$query = "INSERT INTO contactus(Name,Email,Number,Message)values('$Names','$Email','$Mobile','$Message')";
		
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
        <title>connection_page</title>
    </head>
    <script>
        function loading()
        {
            window.location.href ="Quizz_Home_Page.html";
        
        }
    </script>
    <body onload="loading()">

    </body>
</html>
