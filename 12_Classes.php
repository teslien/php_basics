<?php
class Employee {
  //properties

  public $name;
  public $surname;

  //method

  function set_name( $name ) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

$x = new Employee();
$x->set_name("Rohit");
echo $x->get_name();
?>