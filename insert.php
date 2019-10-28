<?php
require_once 'dbconn.php';

$name=$_POST['nameSV'];
$age=$_POST['ageSV'];
$address=$_POST['addressSV'];

$sql="INSERT INTO contact VALUES(null,'$name','$age','$address')";
if($conn->query($sql)){
    echo "success";
}else{
    echo "fail";
}
?>