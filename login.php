<?php
$sname="127.0.0.1:3306";
$uname="root";
$passwd="root";
$dbname="train_details";

$con=new mysqli($sname,$uname,$passwd,$dbname);

if($con->connect_error)
{
 die("Connection failed:".$con->connect_error);
}
echo "Connected Successfully"."<br>";
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST["username"], $_POST["password"])) 
    {     

        $username = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysql_query("SELECT user_name, password FROM sign_up WHERE username = '".$username."' AND  password = '".$password."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $username; 
            $sql = "INSERT INTO login(username,password)
VALUES('$username','$password')";
           if ($conn->query($sql) === TRUE) 
              {
                echo "Welcome $username!!!";
                echo "home.php";
               } 
          else 
              {
               echo "Error" . $sql . "<br>" . $conn->error;
               }
        }
        else
        {
            echo 'Username or Password are incorrect!';
            echo 'Enter the valid one!!!';
        }
}
$conn->close();
?>

