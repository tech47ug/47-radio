<?php
// Database configuration (if needed)
$host = 'localhost';
$dbname = 'radio_station';
$username = 'source';
$password = 'africa21africa';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>