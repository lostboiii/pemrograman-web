<?php
$host = "MSI\SQLEXPRESS";
$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD"=> "");
$connect = sqlsrv_connect($host, $connInfo);
if (!$connect) {
    die(print_r(sqlsrv_errors(), true));
}

?>