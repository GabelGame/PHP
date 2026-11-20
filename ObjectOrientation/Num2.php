<?php
    //задание 1
    class Employee {
        private $name;
        private $salary;
        private $age;
    }

    //задание 2
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function __construct($name, $salary, $age) {
            $this->name = $name;
            $this->salary = $salary;
            $this->age = $age;
        }
    }

    // задание 3
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function __construct($name, $salary, $age) {
            $this->name = $name;
            $this->salary = $salary;
            $this->age = $age;
        }

        public function show() {
            return $this->name . ' ' . $this->salary . ' ' . $this->age;
        }
    }

    $employee = new Employee('Иван', 1000, 25);
    echo $employee->show();

    // задание 4
    class Employee {
        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
        }

        public function getSalary() {
            return $this->addSign($this->salary);
        }

        private function addSign($num) {
            return $num . '$';
        }
    }

    // задание 5, 6
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function __construct($name, $salary, $age) {
            $this->name = $name;
            $this->salary = $salary;
            $this->age = $age;
        }
    }

    //Задание 7
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function __construct($name, $salary, $age) {
            $this->name = $name;
            $this->salary = $salary;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary;
        }

        public function getAge() {
            return $this->age;
        }
    }

    $employee = new Employee('Иван', 1000, 25);
    echo $employee->getName();
    echo $employee->getSalary();
    echo $employee->getAge();

    // Задание 8
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function setName($name) {
            $this->name = $name;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }

        public function setAge($age) {
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary;
        }

        public function getAge() {
            return $this->age;
        }
    }

    $employee = new Employee();
    $employee->setName('Иван');
    $employee->setSalary(1000);
    $employee->setAge(25);

    // Задание 9
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function setName($name) {
            $this->name = $name;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }

        public function setAge($age) {
            if ($age >= 0 && $age <= 120) {
                $this->age = $age;
            } else {
                echo 'age is incorrect';
            }
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary;
        }

        public function getAge() {
            return $this->age;
        }
    }

    $employee = new Employee();
    $employee->setAge(25);
    $employee->setAge(150);

    // Задание 10
    class Employee {
        private $name;
        private $salary;
        private $age;

        public function setName($name) {
            $this->name = $name;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
        }

        public function setAge($age) {
            if ($age >= 0 && $age <= 120) {
                $this->age = $age;
            } else {
                echo 'age is incorrect';
            }
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary . '$';
        }

        public function getAge() {
            return $this->age;
        }
    }

    $employee = new Employee();
    $employee->setName('Иван');
    $employee->setSalary(1000);
    $employee->setAge(25);

    echo $employee->getName();
    echo $employee->getSalary();
    echo $employee->getAge();