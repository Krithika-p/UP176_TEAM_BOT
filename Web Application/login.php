<?php
$host="localhost";
$user="root";
$password="";
$db="medbot";

//database connection
$conn = new mysqli($host, $user, $password, $db);

if(isset($_POST['email']))
{
    $email=$_POST['email'];
    $password=$_POST['pass'];
  

    $sql= "SELECT * FROM registration where email = '".$email."' AND pass='".$password."' limit 1";
    $result= mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1)
    {
        
         header("Location:http://localhost/medbot/chatroom/home.html");
        exit();
    }
    else{
        
            
        header("location:http://localhost/medbot/chatroom/loginpage.php?login=error");
        exit();
    }
   
    $conn->close();
}