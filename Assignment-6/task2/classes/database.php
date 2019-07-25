<?php
class Database
{
    private $serverName = "localhost";
    private $userName = "root";
    private $password = "";
    private $dbName = "attendance_system";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host={$this->serverName};dbname={$this->dbName}", $this->userName, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("Database Connected.\n");
        } catch (PDOException $e) {
            echo ("Connection failed.\n" . $e->getMessage());
        }
    }

    public function insertEmployee(string $fName, string $lName, string $age)
    {
        $data = [
            "firstName" => $fName,
            "lastName" => $lName,
            "age" => $age
        ];

        $sql = "INSERT INTO employee_info(firstName, lastName, age) VALUES(:firstName, :lastName, :age)";
        $this->conn->prepare($sql)->execute($data);

        echo ("Employee Inserted Successfully.\n");
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
