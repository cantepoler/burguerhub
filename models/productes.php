<?php
function getProductes($conn, $cat) {
    $sql = "SELECT * FROM productes WHERE categoria_id = $cat"; // TODO 
    $result = pg_query($conn, $sql);
    $productes = pg_fetch_all($result);
    return $productes;
}

function getProdById($conn, $id) {
    $sql = "SELECT * FROM productes WHERE id = $id";
    $result = pg_query($conn, $sql);
    $producte = pg_fetch_all($result)[0]; //crec que és així
    return $producte;
}
?>