<?php

$host = "db";
$user = "bepurposed_user";
$password = "bepurposed_pass";
$database = "bepurposed_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}