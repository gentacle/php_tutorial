<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
// 패턴 구분자 뒤의 "i"는 대소문자를 구별하지 않게 합니다.
if (preg_match("/php/i", "PHP is the web scripting language of choice.")) {
    echo "발견하였습니다.";
} else {
    echo "발견하지 못했습니다.";
}
?>
  </body>
</html>
