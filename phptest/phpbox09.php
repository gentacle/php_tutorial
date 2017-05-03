<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      .error {color: #FF0000;}
    </style>
  </head>
  <body>
    <?php
    $name = $email = $gender = $comment = $website = "";
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    //변수 정의 및 초기화.
    //서버로 들어오는 값이 POST타입인지 거르기.
    //get방식의 경우 주소창에 직접 입력해서 접근이 가능하기때문?
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "name is required";
      }else{
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "email is required";
      }else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $emailErr="Invalid email format";
        }
      }

      if (empty($_POST["website"])) {
        $website = "";
      }else{
        $website = test_input($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
          $websiteErr="Invalid URL";
        }
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      }else{
        $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "gender is required";
      }else{
        $gender = test_input($_POST["gender"]);
      }
    }
    //POST방식으로 들어온 값이 비었을 경우 오류메시지를 출력.
    //empty=>0 & null true. isset=>입력 true.

    //해킹을 방지하기 위해 특수문자 및 띄어쓰기 엔터 제거.
    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <!-- html양식 -->
    <h2>PHP form validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post"
          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      name: <input type="text" name="name" value="<?php echo $name; ?>">
      <span class="error">*<?php echo $nameErr; ?></span>
      <br><br>
      email: <input type="text" name="email" value="<?php echo $email; ?>">
      <span class="error">*<?php echo $emailErr; ?></span>
      <br><br>
      website: <input type="text" name="website" value="<?php echo $website; ?>">
      <span class="error"><?php echo $websiteErr; ?></span><br><br>
      Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
      Gender: <input type="radio" name="gender" value="female"
              <?php if(isset($gender) && $gender=="female") echo "checked"; ?>>Female
              <input type="radio" name="gender" value="male"
              <?php if(isset($gender) && $gender=="male") echo "checked"; ?>>Male
      <span class="error">*<?php echo $genderErr; ?></span>
      <br><br>
      <input type="submit">
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>

  </body>
</html>
