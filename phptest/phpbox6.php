<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

     function writeLoli(){
       echo "LOLIDAISUKI!";
     }
     function br(){
       echo "<br>";
     }
     writeLoli();
     br();
     writeLoli();

     function familyName($fname){
       echo "$fname Van.<br>";
     }
     br();

     familyName("groy");
     familyName("roze");
     familyName("ceil");

     function familyName2($fname, $year){
       echo "$fname Van. Born in $year <br>";
     }

     familyName2("groy","1334");
     familyName2("roze","1303");
     familyName2("ceil","1360");


     function setHeight($minheight = 50){
       echo "The height is $minheight <br>";
     }

     setHeight(350);
     setHeight();
     setHeight(143);
     setHeight(192);

     function sum($x, $y) {
       $z = $x + $y;
       return $z;
     }

     //반환할 값을 리턴에 명시.

     echo "5 + 10 = " . sum(5,10) . "<br>";
     echo "7 + 13 = " . sum(7,13) . "<br>";
     echo "2 + 4 = " . sum(2,4);




     ?>

  </body>
</html>
