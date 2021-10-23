<?php 
// DB credentials.
define('DB_HOST','127.0.0.1:3306');
define('DB_USER','punith');
define('DB_PASS','12345');
define('DB_NAME','djbookingmanagementsystem');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>