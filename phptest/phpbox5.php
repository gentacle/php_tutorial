<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
    define("br","<br>");
    function br(){
      echo br;
    }
    ?>
    <?php
    //
    // $tz = 'Asia/Seoul';
    // $timestamp = time();
    // $dt = new DateTime("now", new DateTimeZone($tz));
    // $dt -> setTimestamp($timestamp);
    // echo $dt->format('d.m.Y, H:i:s');

    date_default_timezone_set('UTC');
    //기본 시간대를 설정하지 않으면 보안상(?)의 이유로 불러오질 못하는듯.
    //디폴트갓을 지정해 줘야 하는듯하다.

    $t = date("H");
    if ($t<"20") {
      echo ":D";
    }
    br();
    if ($t<"20") {
      echo "Have a nice day";
    }elseif ($t<"20") {
      echo "Have a good day";
    }else {
      echo "Have a good night";
    }

    br();

    $favcolor = "red";

    switch ($favcolor){
      case "red":
        echo "Your favorite color is red!";
        break;
      case "blue":
        echo "Your favorite color is blue!";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
      default:
        echo "your favorite color os neither red,blue,green!";
    }
    br();

    $x=0;
    while ($x <= 4) {
      echo "The number is $x <br>";
      $x++;
    }
    br();

    $x=1;
    do {
      echo "the number is $x <br>";
      $x++;
    } while ($x <= 4);
    br();

    $x=10;
    do {
      echo "The number is $x <br>";
    } while ($x <= 4);
    // 각 if 문과 do문이 뭉탱이로 동작하고 다 긑나야 다음으로 넘어감
    // do문에서 조건이 이미 만족이 안되는 상태로 불가능하면
    // 최초의 정의값이 입력된 상태로 끝남.

    for ($x=0; $x <= 10; $x++) {
      echo "The number is $x <br>";
    }
    //x값을 초기화하지 않았기 때문에 for문에서 0무터라는 조건을 달더라도
    //이전값이 출력되는듯.?

    $color = array("red","blue","green","yello");
    foreach ($color as $value) {
      echo "$value <br>";
    }



    ?>

  </body>
</html>
