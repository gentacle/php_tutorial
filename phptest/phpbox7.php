<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function br(){
      echo "<br>";
    }
    //배열(array)

     $cats = array("koshot","blue","americam");
     echo "I like" . $cats[0]. ", ". $cats[1]. " and " . $cats[2].".";

     br();
     echo count($cats); //배열의 길이 출력.




     ?>

  </body>
</html>
