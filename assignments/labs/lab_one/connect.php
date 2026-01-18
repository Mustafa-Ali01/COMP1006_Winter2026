<?php
$host = 'localhost'; 
$db   = 'week_two'; 
$user = 'root';        
$pass = ''; 

// Points to the database
$dsn = "mysql:host=$host;dbname=$db";

// Trying to connect to database
try {
   // Use $pass here to match the variable defined above
   $pdo = new PDO($dsn, $user, $pass); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "<p> Database Connected! </p>"; 
}
// What happens when there is an error
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); 
}
?>