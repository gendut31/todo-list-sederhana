<?php
    include './handler.php';
    $handler = new DbHandler();
    $example = $handler->readData("SELECT * FROM todo");
    echo json_encode($example);