<?php
session_start();
include('includes/dbconnection.php');

if(isset($_POST['delete_id'])){
    $id = $_POST['delete_id'];
    $query = mysqli_query($con, "DELETE FROM tblappointment WHERE ID='$id'");

    if ($query) {
        echo "Appointment deleted successfully.";
    } else {
        echo "Failed to delete appointment.";
    }
}
?>
