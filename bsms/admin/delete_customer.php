<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['delete_id'])) {
  $id = $_POST['delete_id'];
  // Debugging lines
  error_log("Delete ID: " . $id);
  error_log("Running delete query...");

  $query = $dbh->prepare("DELETE FROM tblcustomers WHERE ID=:id");
  $query->bindParam(':id', $id, PDO::PARAM_STR);
  $query->execute();

  if($query) {
    echo "Customer deleted successfully.";
  } else {
    echo "Failed to delete customer.";
  }
} else {
  echo "Delete ID not set.";
}
?>
