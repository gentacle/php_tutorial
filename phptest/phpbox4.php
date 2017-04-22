<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    define("br","<br>");
    function br(){
      echo br;
    }

     $x=100;
     $y="100";

     var_dump($x==$y);
     br();
     var_dump($x===$y);
     br();

     $z=10;
     echo $z++;
    //  출력값 10. 하지만 내부에선 11로 재정의되어 입력되어있음.
    br();

    if($x==100&&$y==100){
      echo "kill yourself lolicon!";
    }else {
      echo "goodman boy";
    };
    br();

    $box1 = "LOLI";
    $box2 = "DISUKI";
    $box1 .= $box2;
    echo $box1;
    br();

    $cat1 = array('a' => 'red' , 'b' => 'blue' );
    $cat2 = array('c' => 'green' , 'd' => 'black' );

    print_r($cat1+$cat2);
     ?>
  </body>
</html>
