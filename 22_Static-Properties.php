<!-- Static properties can be accessed directly without creating 
an instance of a class. 
Static properties can be declared by using 
the static keyword.  -->

<?php
class pi {
  public static $value = 3.14;
}
// Getting static property
echo pi::$value;
?>