<?php
    //For code reusability this function is often located in its own file.
    //Pages that require database assess include it with include('connection.php');
    //Create a connection object
    //@ suppresses errors.
    //parameters: mysqli_connect('my_server', 'my_user', 'my_password', 'my_db');
    function fConnectToDatabase() {
        $config = parse_ini_file('config.ini');
        $link = @mysqli_connect($config['host'], $config['username'], $config['password'], $config['dbname']);

        //handle connection errors
        if (!$link) {
            die('Connection Error: ' . mysqli_connect_error());
        }
        return $link;
    }

    // database functions ************************************************
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

    /*List Authors Function:
    This function uses ISBN as an input parameter and returns a string of author names formatted as
    hyperlinks. To use the function:
    1. Copy this code into a file in your bookstore directory named "ListAuthors.php".
    2. Include this file in your page using: include_once("ListAuthors.php")
    3. To list authors, call the function and pass in the ISBN of the book using:
       echo ListAuthors($ISBN);
       where $ISBN is a variable containing the book's ISBN.
    This function requires that you have an open database connection to your database.
    You are welcome to modify this script.
    */
    function fListAuthors($link, $ISBN) {
        $sql = "SELECT nameF, nameL
    FROM bookauthors, bookauthorsbooks
    WHERE bookauthorsbooks.ISBN = '$ISBN'
    AND bookauthors.AuthorID = bookauthorsbooks.AuthorID
    ORDER BY nameL";

        $result = $result = mysqli_query($link, $sql)
        or die('SQL syntax error: ' . mysqli_error($link));

        while ($row = mysqli_fetch_array($result)) {
            $nameF = $row['nameF'];
            $nameL = $row['nameL'];
            $AuthorList .= "<a href='SearchBrowse.php?search="."$nameL'>$nameF $nameL</a>, ";
        }

        //remove the last comma
        return substr_replace($AuthorList, "",-2);
    }

?>
