<?php
require_once '12_Classes.php';

class admins extends Employee{

    public $admin;
    function make_admin($name){
        $this->admin = $name;
    }

    function get_admin(){
        echo $this->admin;
    }

}

$i = new admins();
$i->make_admin("Mohan");
$i->get_admin();
echo "<br>";
$i->set_name("Rohit");
$i->get_name();
echo "<br>";

?>