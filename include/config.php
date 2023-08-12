<?php

define("WEB_TITLE","Global Standard Trust Bank"); // Change Bank Name
define("WEB_URL","http://dashboard.globalstandardtrb.com"); // Change No "/" Ending splash
define("WEB_EMAIL","support@globalstandardtrb.com"); // Change Your Website Email

$web_url = WEB_URL;

function dbConnect(){
    $servername = "localhost";
    $username = "logikbtw_globalstandardtrb_back";//DATABASE USERNAME
    $password = "+C@ppy126";//DATABASE PASSWORD
    $database = "logikbtw_globalstandardtrb_back";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}