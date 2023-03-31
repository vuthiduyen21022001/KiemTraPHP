<?php
require_once("personclass.php");

class Emloyee extends Person
{
    private $employeeID;
    private $department;

    public function __construct($employeeName, $nationalID, $dept)
    {
        parent ::__construct($employeeName,$nationalID);
        $this->department = $dept;
        $this->employeeID = $this->GenerateEmployeeID();   
    }

    public function GetEmployeeID()
    {
        return $this->employeeID;
    }
    
    public function GetDepartment()
    {
        return $this->department;
    }

    public function SetDepartment($dept)
    {
        $this->department = $dept;
    }

    final public function GenerateEmployeeID()
    {
        static $IDGen = 1;
        return $IDGen++;
    }

}

?>