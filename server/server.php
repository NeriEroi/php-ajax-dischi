<?php

require __DIR__ . "/../php/database.php";

header('Content-Type: application/json');

echo json_encode($db);

?>