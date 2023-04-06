<?php
class Database
{
    include_once("config.php");
    // private $host = "us-west.connect.psdb.cloud";
    // private $db_name = 'NursingVR';
    // private $username = 'n6zfvzbog0zcpp1y3t5k';
    // private $password = 'pscale_pw_eebZyF8tOJPkG5wjfi15GJq9w4ahI2Vae1IoU1dZEMd';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->$db_host . ';dbname=' . $this->$db_name, $this->$db_username, $this->$db_password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
?>