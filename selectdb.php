<?php

$conn = mysqli_connect('localhost', 'ajax_app', '123456', 'ajaxtest');

$query = 'SELECT * FROM users';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);

mysqli_close($conn);

?>