<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php



    //*file 존재 유무를 체크하고 출력.
    // if(!file_exists("welcome.txt")) {
    //   die("File not found");
    // } else {
    //   $file=fopen("welcome.txt","r");
    // }

    //오류문 출력 펑션.
    //error_function(error_level,error_message,
    //               error_file,error_line,error_context)
    // function customError($errno, $errstr){
    //   echo "<b>Error:</b> [$errno] $errstr<br>";
    //   echo "Ending Script";
    //   die();
    // }

    function customError($errno, $errstr) {
      echo "<b>Error:</b> [$errno] $errstr<br>";
      echo "Webmaster has been notified";
      error_log("Error: [$errno] $errstr",1,
      "someone@example.com","From: webmaster@example.com");
    }



    set_error_handler("customError",E_USER_WARNING);

    $test = 2;
    if ($test>=1) {
      trigger_error("Value must be 1 or below", E_USER_WARNING);
    }

    ?>
  </body>
</html>
