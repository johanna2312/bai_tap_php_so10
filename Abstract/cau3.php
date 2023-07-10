<?php
abstract class Employee {
    protected $name;
    protected $salary;
    
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    abstract public function getInformation();
}

class Manager extends Employee {
    private $department;
    
    public function __construct($name, $salary, $department) {
        parent::__construct($name, $salary);
        $this->department = $department;
    }
    
    public function getInformation() {
        echo "Name: " . $this->name . "\n";
        echo "Salary: " . $this->salary . "\n";
        echo "Department: " . $this->department . "\n";
    }
}

class Staff extends Employee {
    private $position;
    
    public function __construct($name, $salary, $position) {
        parent::__construct($name, $salary);
        $this->position = $position;
    }
    
    public function getInformation() {
        echo "Name: " . $this->name . "\n";
        echo "Salary: " . $this->salary . "\n";
        echo "Position: " . $this->position . "\n";
    }
}

$manager = new Manager("John Doe", 5000, "Marketing");
$manager->getInformation();

$staff = new Staff("Jane Smith", 3000, "Assistant");
$staff->getInformation();