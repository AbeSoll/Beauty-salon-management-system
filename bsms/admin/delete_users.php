<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['delete_id'])) {
  $id = $_POST['delete_id'];
  // Debugging lines
  error_log("Delete ID: " . $id);
  error_log("Running delete query...");

  $query = $dbh->prepare("DELETE FROM tblusers WHERE id=:id");
  $query->bindParam(':id', $id, PDO::PARAM_STR);
  $query->execute();

  if($query) {
    echo "User deleted successfully.";
  } else {
    echo "Failed to delete user.";
  }
} else {
  echo "Delete ID not set.";
}
?>
