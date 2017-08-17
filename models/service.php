<?php

class Service {

    private static $connection;


    /**
     * Opens connection with the database.
     *
     * @return connection       connection with the database.
     */ 
    public static function openDb() {
        Service::$connection = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD);
        if (!Service::$connection) throw new Exception("Connection to the database server failed!");
        Service::$connection->query("SET NAMES 'utf8mb4'");
        Service::$connection->query('SET character_set_connection=utf8mb4');
        Service::$connection->query('SET character_set_client=utf8mb4');
        Service::$connection->query('SET character_set_results=utf8mb4');
        Service::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return Service::$connection;
    }


    /**
     * Closes connection by setting it to null.
     */ 
    public static function closeDb() {
        Service::$connection = null;
    }
    
}

?>
