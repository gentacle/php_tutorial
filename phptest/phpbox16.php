<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //* Set session variables
    $_SESSION["favcolor"] = "red";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.<br><br><br>";

    //* 세션을 기동 후 다른 php파일에서 불러와 사용가능.
    //* Echo session variables that were set on previous page
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

    echo "<br><br>";

    print_r($_SESSION);

    //*세션 내용삭제 후 세션삭제.
    //* remove all session variables
    // session_unset();

    //* destroy the session
    // session_destroy();


    ?>
  </body>
</html>
