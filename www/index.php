<?php 
echo 'This is '.date('Y');

try {
    $dbh = new PDO("mysql:host=mysql;dbname=information_schema","root","password");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ' | Connected to Database';
	}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }