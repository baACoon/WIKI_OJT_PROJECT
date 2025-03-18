<?php

$db = mysqli_connect('localhost', 'root', '', 'wiki');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>