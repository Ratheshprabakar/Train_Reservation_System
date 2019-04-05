<html>
<head>
<title>
Passenger Details
</title>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>

<body>
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
$sql="select * from Train_details";
$result = $con->query($sql);
?>
<h2 style="color:Green;text-align:center;font-family:Courier;font-size:300%;">Train Details</h2>
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Train_Number</th>
    <th>No_of_seats</th>
  </tr>
<?php
while($row = $result->fetch_row())
{  
  ?><tr>
    <td><?php echo $row[0]?></td>
    <td><?php echo $row[1]?></td>
    <td><?php echo $row[2]?></td>
  </tr>
  <?php
}
?>
</table>

</body>
<?php
$con->close();
?>
</html>
