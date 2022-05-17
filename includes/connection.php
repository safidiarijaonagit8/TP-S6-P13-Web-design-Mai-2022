<?php

function dbconnect()
{
        $host = 'localhost';
        $dbname = 'webdesign';
        $username='postgres';
        $password='safidy';
        $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
        $dbh = null;

        try {
        	$dbh = new PDO($dsn);
        	//$dbh = null;
        } catch (PDOException $e) {
        	print "Erreur ! : " . $e->getMessage();
        	die();
        }
        return $dbh;
}
?>
