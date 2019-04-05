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
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
        $sql = mysql_query("insert into sign_up values('$username','$password','$firstname','$lastname','$gender','$age');");
       
        if(mysql_num_rows($sql) > 0 )
        { 
            
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
$conn->close();
?>

