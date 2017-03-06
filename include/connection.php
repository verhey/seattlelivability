<?php
    //For code reusability this function is often located in its own file.
    //Pages that require database assess include it with include('connection.php');
    //Create a connection object
    //@ suppresses errors.
    //parameters: mysqli_connect('my_server', 'my_user', 'my_password', 'my_
    function fConnectToDatabase() {
        $config = parse_ini_file('config.ini');
        $link = @mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);

        //handle connection errors
        if (!$link) {
            die('Connection Error: ' . mysqli_connect_error());
        }
        return $link;
    }

    // database utility functions ************************************************
    function fAsDollars($value) {
        return '$' . number_format($value, 0);
    }




