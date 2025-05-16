<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ddt';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dotenv = parse_ini_file('.env');
$conn = new mysqli(
    $dotenv['DB_HOST'],
    $dotenv['DB_USER'],
    $dotenv['DB_PASS'],
    $dotenv['DB_NAME']
);

?>
