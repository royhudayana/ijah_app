<?php

include 'connect.php';

$name_ = mysqli_real_escape_string($link, $_POST['name']);
$email_ = mysqli_real_escape_string($link, $_POST['email']);
$message_ = mysqli_real_escape_string($link, $_POST['message']);

// attempt insert query execution
$sql = "INSERT INTO contact (name, email, message,timestamp) VALUES ('$name_', '$email_', '$message_', now())";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);
?>
