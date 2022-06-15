  
<?php      
    include('connection.php');
    include('adminpage.php');  
    $Admin_Name = $_POST['admin_name'];  
    $Admin_Password= $_POST['password'];  
      
        //to prevent from mysqli injection  
        $Admin_Name = stripcslashes($Admin_Name);  
        $Admin_Password = stripcslashes($Admin_Password);  
        $Admin_Name = mysqli_real_escape_string($conn, $Admin_Name);  
        $Admin_Password = mysqli_real_escape_string($conn, $Admin_Password);  
      
        $sql = "select *from adminpage where Admin_Name = '$Admin_Name' and Admin_Password = '$Admin_Password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo ""; 
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</scrip>";
            die(); 
        }     
?>  
