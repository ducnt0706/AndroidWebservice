<?php
$conn=mysqli_connect("localhost","root","","sinhvien");
mysqli_query($conn,"SET NAMES 'utf8'");
$sql="SELECT * FROM contact";
$data=mysqli_query($conn,$sql);
foreach($data as $row){
  echo $row['name'];
  echo $row['age'];
  echo $row['address'];
  echo "<br>";
}
?>