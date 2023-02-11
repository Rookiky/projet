<?php
function OpenCon()
{

    // windows
    $dbuser = getenv('DB_USERNAME');
    $dbpass =  getenv("DB_PASSWORD");
    $dbport = getenv('DB_PORT');
    $dbname =  getenv("DB_NAME");
    $dbhost =  getenv("DB_HOST");

    // try {
    //     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully";
    // } catch (PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    //}
    $conn = new mysqli($dbhost . ":" . $dbport, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}