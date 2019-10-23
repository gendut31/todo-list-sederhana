<?php

class DbConnect{

    protected $conn;

    function __construct(){
        date_default_timezone_set("Asia/Kuala_Lumpur");

        include '../config/config.php';

        $this->conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno()) {
            echo "Koneksi gagal";
        }

        return $this->conn;
    }
}
