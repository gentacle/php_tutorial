<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    table,th,td{
      border: 1px solid black;
      border-collapse: collapse;
    }
    th,td{
      padding: 5px;
    }
    </style>
  </head>
  <body>

    <?php
    $int = 100;
    echo "int is". $int ."<br>";
    if (!filter_var($int, FILTER_VALIDATE_INT) === false){
      echo("Integer is valid.");
    }else {
      echo("Integer is not valid");
    }

    echo "<br>";
    //int값이 0일 경우 정수가 유효하지 않다고 판단한다. 이를 방시하는 식.
    $int = 0;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
    } else {
    echo("Integer is not valid");
    }
    echo "<br>";

    //* FILTER_SANITIZE_STRING : 문자열에 포함된 모든 html 양식을 제거.
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr; ?>

    <?php echo "<br><br><br>" ?>

    <!-- filter_list() => PHP 필터 확장이 제공하는 것을 나열 -->
    <table>
      <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
      </tr>
      <?php
      foreach (filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
      }
      ?>
    </table>

    <?php
    //* ip 유효성 검사.
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false){
      echo("ip is a valid IP address");
    }else {
      echo("$ip is not a valid IP address");
    }
    echo "<br><br>";

    //* email 유효성검사.--------------------
    $email = "genta/cle00@gmail.com";

    //* 불필요한 특수문자 제거
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      echo("$email is a valid email address");
    } else {
      echo("$email is not a valid email address");
    }
    //=>  gentacle00@gmail.com is a valid email address
    // 특수문자/가 제거됨.

    $url = "https://www.w3schools.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    //*불필요한 문자 제거 후 url 유효성검사.
    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
      echo("$url is a valid URL");
    } else {
      echo("$url is not a valid URL");
    }
    ?>

  </body>
</html>
