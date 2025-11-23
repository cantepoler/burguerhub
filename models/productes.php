<?php
function getProductes($conn, $cat) {
    $sql = "SELECT * FROM productes WHERE categoria_id = $cat"; // TODO - 
    $result = pg_query($conn, $sql);
    $productes = pg_fetch_all($result);
    return $productes;
}
?>