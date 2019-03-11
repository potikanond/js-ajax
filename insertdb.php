<?php
$conn = mysqli_connect('localhost', 'ajax_app', '123456', 'ajaxtest');

echo 'Processing...';

// Check for POST variable
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);

    $query = "INSERT INTO users(u_name) VALUES('$name')";

    if(mysqli_query($conn,$query)) {
        echo 'User '.$name.' Added...';
    } else {
        echo 'Error: '.mysqli_error($conn);
    }
}

mysqli_close($conn);
?>