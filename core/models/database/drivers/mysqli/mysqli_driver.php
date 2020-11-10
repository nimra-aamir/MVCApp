<?php
namespace core\models\database\drivers\mysqli;
use mysqli;
class mysqli_driver
{

    private static $sqli_instance = null;
    private static $db_connection = null;

    private function __construct ()
    {
    }

    public static function getSqliInstance()
    {
        if (self::$sqli_instance  == null) {
            self::$sqli_instance = new mysqli_driver();
            self::$db_connection = self::openConnection();//create singleton instance
        }
        return self::$sqli_instance; // return instance
    }

    private function __clone()
    {    //make it provate so the second instance can not be created

    }

    public function closeConnection()
    {
        if (self::$db_connection) {
            self::$db_connection->close();   //close the sql connection
        }
    }

    public function executeQuery($query)
    {
        if(self::$db_connection) {
            return self::$db_connection->query($query);
        }
        return null;
    }

    private function openConnection ()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "123";
        $db = "MVCApp";
        return new mysqli($dbhost, $dbuser, $dbpass,$db);//connect to the database
    }


}