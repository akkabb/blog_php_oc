<?php
    //This wil start all the session
    session_start();

    //Create variables to store DB elements
    $dns = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = 'root';

    // Connect to our database
    try{
        $database = new PDO($dns, $user, $password, [
            PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    catch (Exception $e)
    {
        die('ERREUR : ' . $e->getMessage());
    }
?>