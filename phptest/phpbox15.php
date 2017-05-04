<?php
//* cookie setting
// $cookie_name = "user";
// $cookie_value = "gentacle";
// setcookie($cookie_name, $cookie_value, time()+(86400*30),"/");

//* cookie delete
setcookie("user","",time()-3600);

//*test cookie
// setcookie("test_cookie","test",time()+3600,"/");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // if (!isset($_COOKIE[$cookie_name])) {
    //   echo "Cookie named '" . $cookie_name ."' is not set!";
    // }else{
    //   echo "cookie '" . $cookie_name . "' is set!<br>";
    //   echo "Value is : " . $_COOKIE[$cookie_name];
    // }
    ?>
    <!-- <p><strong>Note:</strong>You might have to reload the page to see the new value of the cookie.</p> -->

    <?php
    if (count($_COOKIE)>0) {
      echo "Cookies are enabled.";
    }else{
      echo "Cookies are disabled.";
    }
    ?>


  </body>
</html>
