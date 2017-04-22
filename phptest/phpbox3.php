<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- 상수 생성 등. -->
    <?php

    //  define(name, value, case-insensitive)
    define("LOLICON","welcome to the jail!");
    echo LOLICON;
    // 대소문자 구분.incase방식.
    print "<br>";
    define("lolicon","welcome to the jail!",true);
    echo lolicon;
    // true->대소문자 구분하지않음.

    // 펑션 철자 주의!
    // funtion(X) function(O)
    function myTest(){
      print "<br>";
      echo LOLICON;
    }
    myTest();

     ?>
  </body>
</html>
