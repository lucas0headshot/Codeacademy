<?php
    function connect() {
        $hostname = 'localhost';

        //Database name
        $dbname = 'salon';

        //User name and password
        $username = 'salon';
        $password = 'salon';

        //DSN, an combination of the database type, hostname and dbname
        $dsn = "mysql:host=$hostname;dbname=$dbname";

        try {
            //Return a PDO instace, an database object
            return new PDO($dsn, $username, $password);
        } catch (Exception $e){
            //If the connection returned a error, the echo below will show
            echo($e->getMessage());
        }
    }
?>