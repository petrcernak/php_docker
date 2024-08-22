<?php
$host = 'postgres';
$user = 'postgres';
$pass = '55295529';
$db = 'mp2';

$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

if (!$conn) {
    die("Connection failed");
}

echo "Connected to PostgreSQL successfully";

// Your PHP code for PostgreSQL interactions goes here

$conn = null;
