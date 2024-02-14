<!-- In certain cases where we need to access methods and properties in terms of class rather than an object, the static methods come for help. Any method declared as static can be accessed without creating an object.

Static methods are declared with the static keyword. -->

<?php
class greeting {
  public static function welcome() {
    echo "Hello Bhai!";
  }
}

// Call static method
greeting::welcome();
?>