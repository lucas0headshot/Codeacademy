<?php

// Connect to the database and return the database object
function connect() {
    // Set the hostname for CodeCademy's platform
    $hostname = '/tmp';

    // Set the database name
    $dbname = 'ccuser';

    // Set the username and password with permissions to the database
    $username = 'ccuser';
    $password = 'pass';
    
    // Create the DSN (data source name) by combining the database type, hostname and dbname
    $dsn = "pgsql:host=$hostname;dbname=$dbname";

    // Create the try/catch blocks here
  try {
    return $db = new PDO($dsn, $username, $password);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

// Get a list of all tiers in the database
function getTiers() {
    try {
        // Get the database object
        $db = connect();

        // Create a query to get all fields for all tiers
        $tiersQuery = $db->query("SELECT * FROM tiers");
        // Return all records
        return $tiersQuery->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        // If an error occurs echo the error
        echo $e->getMessage();
    }
}