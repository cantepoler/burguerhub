<?php
function connectaBD() {
    $host = "deic-docencia.uab.cat";
    $dbname = "tdiw-g5";
    $user = "tdiw-g5";
    $pass = "TXUVXCi4";

    $conn = pg_connect("host=$host dbname=$dbname user=$user password=$pass");
    return $conn;
}
?>