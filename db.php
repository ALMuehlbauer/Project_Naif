<?php

class DB{

    // The database connection
    protected static $connection;

    /**
     * @return bool|mysqli
     */
    public function db_connect()
    {
        // Try and connect to the database
        if (!isset(self::$connection))
        {
            // Load configuration as an array
            $config = parse_ini_file('../config/config.ini');
            self::$connection = new mysqli('localhost', $config['username'], $config['password'], $config['dbname']);
        }

        // If connection was not successful, handle the error
        if (self::$connection === false)
        {
            // Handle error - notify administrator, log to a file, show an error screen, etc.
            return false;
        }

        return self::$connection;
    }

    /**
     * @param $query
     * @return bool|mysqli_result
     */
    public function db_query($query)
    {
        // Connect to the database
        $connection = $this -> db_connect();

        // Query the database
        $result = $connection -> query($query);

        return $result;
    }

    /**
     * @param $query
     * @return array|bool
     */
    public function db_select($query)
    {
        $rows = array();
        $result = $this -> db_query($query);

        if ($result === false)
        {
            return false;
        }

        while ($row = $result -> fetch_assoc())
        {
            $rows[] = $row;
        }

        return $rows;
    }

    /**
     * @return string
     */
    public function db_error()
    {
        $connection = $this -> db_connect();

        return $connection -> error;
    }

    /**
     * @param $value
     * @return string
     */
    public function db_quote($value)
    {
        $connection = $this -> db_connect();
        return "'" . $connection -> real_escape_string($value) . "'";
    }
}
?>