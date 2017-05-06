<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    class MyClass {
      const CC = 'A constant value';
    }
    $classname = 'MyClass';


    echo $classname::CC; // As of PHP 5.3.0
    echo "<br>";
    echo MyClass::CC;
    ?>

  </body>
</html>
