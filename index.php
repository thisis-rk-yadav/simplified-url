<?php
if (isset($_GET['q'])) {
    $hexEncodedQuery = $_GET['q'];
    $decodedQuery = hex2bin($hexEncodedQuery);
    $url = 'https://' . $decodedQuery;
    header("Location: $url");
    exit();
} else {
    echo "No query provided.";
}
?>
