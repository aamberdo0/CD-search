<?php
// this page connects to the database
try {
    $dbh = new PDO('mysql:host=localhost;dbname=do10_stock', "do10_do10", "Honganhdo1978@");
} catch (Exception $e) {
    die('</ol><p style="color:red">Could not connect to DB: ' . $e->getMessage() . '</p></body></html>');
}
