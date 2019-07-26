<?php
require_once("database.php");

class App
{
    private $db;
    private $action;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function appStart()
    {
        echo ("Please choose option:
        1 = Input employee data
        2 = Log attendance
        3 = View report
        anything else = Quit the app.\n");

        while (true) {
            fscanf(STDIN, "%s\n", $this->action);

            if (1 === (int) $this->action) {
                echo ("Enter user's name and age separated by space:\n");
                fscanf(STDIN, "%s %s", $name, $age);

                $this->db->insertEmployee($name, $age);
            } elseif (2 === (int) $this->action) {
                echo ("Enter user's id to log attendance:\n");
                fscanf(STDIN, "%d", $id);

                $this->db->logAttendance($id);
            } else if (3 === (int) $this->action) {

                $this->db->viewReport();
            } else {
                return;
            }
        }
    }
}
