<?php
$host = 'localhost'; 
$db   = 'week_two'; 
$user = 'root';        
$pass = ' ';            

//points to the database
$dsn = "mysql:host=$host;dbname=$db";

//trying to connect to datbaase
try {
   $pdo = new PDO ($dsn, $user, $password); 
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   echo "<p> Database Connected! </p>"; 
}
//what happends when theres a error
catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); 
}

?>
