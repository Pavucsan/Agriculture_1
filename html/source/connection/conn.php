<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="PDOmyDB";

    try{
    /***********************Connection string */
        $conn=new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$password);
        //$conn=new PDO("mysql:host=$serverName;",$userName,$password);

        //set the pdo error mode tho exception
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Connection successful! <br>";
    /***********************End connection string */
    }
    catch(PDOException $ex)
    {
        die("error with ".$ex->getMessage());
    }


?>