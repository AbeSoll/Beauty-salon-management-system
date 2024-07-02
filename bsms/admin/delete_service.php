<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['del_id'])){
  $id = $_POST['del_id'];
  $query = "DELETE FROM tblservices WHERE ID='$id'";
  $result = mysqli_query($con, $query);
  if($result){
    echo "success";
  } else {
    echo "error";
  }
}
?>
