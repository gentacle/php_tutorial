<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $cars = array(
      array("volvo",22,18),
      array("BMW",15,13),
      array("Saab",5,2),
      array("LandR",17,15)
    );

    echo $cars[0][0]."In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
    echo $cars[1][0]."In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
    echo $cars[2][0]."In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
    echo $cars[3][0]."In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

    echo "<br>";


    for($row = 0;$row<count($cars);$row++){
      echo "<p><b>Row number : $row</b></p>";
      echo "<ul>";
      for ($col=0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
      }
      echo "</ul>";
    }

    ?>
  </body>
</html>
