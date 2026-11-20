<?php
    // задание 1
    class Employee1 {
        private $name;
        private $salary;

        public function setName($name) {
            $this->name = $name;
            return $this;
        }

        public function setSalary($salary) {
            $this->salary = $salary;
            return $this;
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary;
        }
    }

    $emp1 = new Employee1();
    $emp1->setName('Иван')->setSalary(1000);
    echo $emp1->getName() . ' ' . $emp1->getSalary() . '<br>';


    // задание 1, 2, 3, 4
    class Validator {
        // задание № 2
        public function isEmail($str) {
            return filter_var($str, FILTER_VALIDATE_EMAIL) !== false;
        }

        // задание № 3
        public function isDomain($str) {
            return filter_var($str, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) !== false;
        }

        // задание № 4
        public function isNumber($str) {
            return preg_match('/^[0-9]+$/', (string)$str) === 1;
        }
    }

    $validator = new Validator();
    var_dump($validator->isEmail('test@mail.ru'));
    var_dump($validator->isDomain('site.ru'));
    var_dump($validator->isNumber('12345'));
    echo '<br>';


    // задание 5, 6, 7
    class City {
        public $name;
        public $population;

        public function __construct($name, $population) {
            $this->name = $name;
            $this->population = $population;
        }
    }

    // задание 6
    $cities = [
        new City('Москва', 13000000),
        new City('Тюмень', 850000),
        new City('Казань', 1300000),
        new City('Омск', 1100000),
        new City('Сочи', 450000)
    ];

    // задание 7
    foreach ($cities as $city) {
        echo $city->name . ' — ' . $city->population . '<br>';
    }


    // задание 8, 9, 10
    class Position {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }

    class Department {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }

    class Employee2 {
        public $name;
        public $position;
        public $department;

        public function __construct($name, $position, $department) {
            $this->name = $name;
            $this->position = $position;
            $this->department = $department;
        }
    }

    // задание 9
    $position = new Position('Программист');
    $department = new Department('Отдел разработки');
    $emp2 = new Employee2('Алексей', $position, $department);

    // задание 10
    echo $emp2->name . ' | ' . $emp2->position->name . ' | ' . $emp2->department->name . '<br>';


    // задание 11
    class Employee3 {
        public $name;
        public $salary;

        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
        }
    }

    $emp3 = new Employee3('john', 1000);
    echo $emp3?->name . '<br>';
    echo $emp3?->salary . '<br>';


    // задание 12
    class Position2 {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }

    class Employee4 {
        public $name;
        public $position;

        public function __construct($name, $position) {
            $this->name = $name;
            $this->position = $position;
        }
    }

    $pos2 = new Position2('developer');
    $emp4 = new Employee4('john', $pos2);
    echo $emp4?->position?->getName() . '<br>';


    // задание 13, 14, 15, 16, 17
    class Worker {
        private $name;
        private $salary;

        public function __construct($name, $salary) {
            $this->name = $name;
            $this->salary = $salary;
        }

        public function getName() {
            return $this->name;
        }

        public function getSalary() {
            return $this->salary;
        }
    }

    // задание 13
    class EmployeesCollection {
        private $employees = [];

        // задание 14
        public function add($employee) {
            $this->employees[] = $employee;
        }

        // задание 15
        public function show() {
            foreach ($this->employees as $employee) {
                echo $employee->getName() . ' — ' . $employee->getSalary() . '<br>';
            }
        }

        // задание 16
        public function getTotalSalary() {
            $sum = 0;
            foreach ($this->employees as $employee) {
                $sum += $employee->getSalary();
            }
            return $sum;
        }

        // задание 17
        public function getAvgSalary() {
            $count = count($this->employees);
            if ($count > 0) {
                return $this->getTotalSalary() / $count;
            }
            return 0;
        }
    }

    $ec = new EmployeesCollection();
    $ec->add(new Worker('Иван', 1000));
    $ec->add(new Worker('Анна', 2000));
    $ec->add(new Worker('Петр', 3000));

    $ec->show();
    echo 'Сумма: ' . $ec->getTotalSalary() . '<br>';
    echo 'Средняя: ' . $ec->getAvgSalary() . '<br>';
?>
