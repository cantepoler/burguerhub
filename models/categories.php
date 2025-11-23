<?php
function getCategories($conn) {
    $sql = "SELECT * FROM categories ORDER BY id";
    $result = pg_query($conn, $sql);
    $categories = pg_fetch_all($result);
    return $categories;
}
?>
