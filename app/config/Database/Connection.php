<?php

    namespace config\Database;

    abstract class Connection 
    {
        private static $conn;

        public static function getCon()
        {
            if (!self::$conn) {
                self::$conn = new \PDO('mysql: host=localhost:90; dbname=mesage','root', '');
            }
            return self::$conn;
        }
    }   

?>