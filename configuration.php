<?php
//Connect databse
//$dbconn = mysqli_connect('mysql9.000webhost.com','a2292550_hilary','a2292550_hilzdb','smilan1899');
define("DB_HOST", "mysql9.000webhost.com");
define("DB_USER", "a2292550_hilary");
define("DB_PASSWORD", "smilan1899");
define("DB_DATABASE", "a2292550_hilzdb");
$con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        // selecting database
        mysql_select_db(DB_DATABASE);
        
        //return database handler
        return $con;
?>