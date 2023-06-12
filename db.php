<?php
/**connect to my sqldatabase */

$con=mysqli_connect(DBSERVER,DBU
define('DBSERVER','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','');
define('DBNAME','queen');

SERNAME,DBPASSWORD,DBNAME);

// check db connection


if($con){

//echo "connected";

}
if($con=== false){

    echo "not connected";
    die("Error: connection error. " .mysqli_connect_error());
}
?>