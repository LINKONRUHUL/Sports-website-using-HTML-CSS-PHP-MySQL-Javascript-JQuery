<?php
include 'database.php';

$t=$_GET['t'];

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id='$t'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?> 