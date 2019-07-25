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
                echo ("Enter user's first-name, last-name and age separated by space:\n");
                fscanf(STDIN, "%s %s %s", $fName, $lName, $age);

                $this->db->insertEmployee($fName, $lName, $age);
            } else {
                return;
            }
        }
    }
}
