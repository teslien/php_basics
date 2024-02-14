<?php
class Namaste {
  const GREETING_MSG= "Namaskaram Dosto!!";
}

echo Namaste::GREETING_MSG;
?>

<?php
class HelloWorld {
  const New_Message = "How is your day going?";
  public function ByeWorld() {
    echo self::New_Message;
  }
}

$helloworld= new HelloWorld();
$helloworld->ByeWorld();
?>