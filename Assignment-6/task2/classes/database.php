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

    public function insertEmployee(string $name, string $age)
    {
        $data = [
            "name" => $name,
            "age" => $age
        ];

        $sql = "INSERT INTO employee_info(name, age) VALUES(:name, :age)";
        $this->conn->prepare($sql)->execute($data);

        echo ("Employee Inserted Successfully.\n");
    }

    public function logAttendance(int $id)
    {
        $sql = "INSERT INTO employee_attendance(employeeId, isAttend) VALUES(:id, :attendance)";
        $this->conn->prepare($sql)->execute(["id" => $id, "attendance" => 1]);
        echo ("Attendance Logged.\n");
    }

    public function viewReport()
    {
        $sql = "SELECT employee_info.employeeId, employee_info.name, employee_attendance.isAttend
        FROM employee_info
        LEFT JOIN employee_attendance
        ON employee_info.employeeId = employee_attendance.employeeId
        ORDER BY employee_info.employeeId";

        $reports = $this->conn->query($sql)->fetchAll();
        $ids = [];
        $names = [];
        $infos = [];

        foreach ($reports as $report) {
            print_r($report);
        }
        foreach ($reports as $report) {
            if (!in_array($report['employeeId'], $ids))
                array_push($ids, $report['employeeId']);
        }
        foreach ($reports as $report) {
            if (!in_array($report['name'], $names))
                array_push($names, $report['name']);
        }
        foreach ($ids as $id) {
            array_push($infos, ['id' => $id, 'name' => '', 'days' => 0]);
        }
        for ($i = 0; $i < count($names); $i++) {
            $infos[$i]['name'] = $names[$i];
        }
        foreach ($reports as $report) {
            foreach ($infos as $info) {
                if ($report['employeeId'] === $info['id']) {
                    $info['days']++;
                }
            }
        }
        print_r($infos);
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}
