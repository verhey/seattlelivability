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
    function fCleanString($link, $UserInput, $MaxLen) {
        //remove html tags
        $UserInput = strip_tags($UserInput);

        //Escape special characters - very important.
        //mysqli_real_escape_string requires database connection
        $UserInput = mysqli_real_escape_string($link, $UserInput);

        //truncate to max length of database field
        return substr($UserInput, 0, $MaxLen);
    }

    function fCleanNumber($UserInput) {
        $pattern = "/[^0-9\.]/"; //replace everything except 0-9 and period
        $UserInput = preg_replace($pattern, "", $UserInput);
        return $UserInput;
    }

    function fAsDollars($value) {
        return '$' . number_format($value, 0);
    }




