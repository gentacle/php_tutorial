<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $int = 122;
    $min = 1;
    $max = 200;

    if (filter_var($int,FILTER_VALIDATE_INT,
     array("options" => array("min_range" => $min, "max_range" => $max))) ===false) {
      echo "Variable value is not within the legal range";
    }else {
      echo "Variable value is within the legal range";
    }
    echo "<br><br>";

    //*IPv6 주소확인.------------------------------
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
      echo("$ip is a valid IPv6 address");
    } else {
      echo("$ip is not a valid IPv6 address");
    }
    echo "<br><br>";

    //*URL 유효성 검사 - QueryString이 있어야 함
    $url = "https://www.w3schools.com";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
      echo("$url is a valid URL");
    } else {
      echo("$url is not a valid URL");
    }
    echo "<br><br>";

    //*ASCII 값> 127을 사용하여 문자 제거.
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>

  </body>
</html>
