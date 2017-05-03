<!DOCTYPE html>
<html>
  <body>
    <?php
    date_default_timezone_set("America/New_York");

    echo "today is ".date("y/m/d")."<br>";
    echo "today is ".date("y.m.d")."<br>";
    echo "today is ".date("y-m-d")."<br>";
    echo "today is ".date("1")."<br>";
    echo "The time is " . date("h:i:sa");
    ?>
    <br><br>

    &copy; 2010-<?php echo date("Y"); ?>
  </body>
</html>
