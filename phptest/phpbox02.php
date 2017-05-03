<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <!-- 정수 및 실수 등 var_dump를 이용하는법 등.
    내용참조법. -->

    <?php
     class Car {
       function car(){
         $this -> model = "VM";
       }
     }

     $herbie = new Car();
     echo $herbie->model;
     ?>
     <br>

     <?php
      $x = "hell o world!";
      $x = null;
      var_dump($x);

      ?>

      <?php
      $x = "hell o world!";
      echo strlen($x);
      print "<br>";
      echo str_word_count($x);
      print "<br>";
      echo strrev($x);
      print "<br>";
      echo strpos($x,"world");
      // 첫자리는 1이 아니라 0임.
      print "<br>";
      echo str_replace("world","lolicon",$x);
       ?>

  </body>
</html>
