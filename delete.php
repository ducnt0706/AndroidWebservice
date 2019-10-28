<?php
require_once 'dbconn.php';

$id=$_POST['idSV'];

$sql="DELETE FROM contact WHERE id='$id'";
if($conn->query($sql)){
    echo "success";
}else{
    echo "fail";
}
?>