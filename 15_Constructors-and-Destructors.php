<?php
class Employee {
  public $name;
  public $surname;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
$emp1= new Employee("Khushi");
echo $emp1->get_name();
?>

<?php
class Employee1 {
  public $name;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct() {
    echo "Employee name is {$this->name}.";
  }
}

$emp1= new Employee("Rohit");
?>