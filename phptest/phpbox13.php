<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // echo readfile("webdictionary.txt");

    echo "1----------------------------------<br>";

    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    //파일에서 읽을 최대 '바이트'수를 지정.
    fclose($myfile);
    echo "<br><br>";

    echo "2----------------------------------<br>";

    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    echo fgets($myfile,filesize("webdictionary.txt"))."<br>";
    fclose($myfile);

    echo "3----------------------------------<br>";

    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file");
    while(!feof($myfile)){
      echo fgets($myfile). "<br>";
    }
    fclose($myfile);

    echo "4----------------------------------<br>";
    //gets=>스트링. 문자열을 읽음. getc=>캐릭터. 한 단어.
    $myfile = fopen("webdictionary.txt","r") or die("Unable to open file");

    while(!feof($myfile)){
      echo fgetc($myfile)."<br>";
    }
    fclose($myfile);

    //파일생성명령어. 없는상태에서 사용시 새로 생성됨.
    //같은 이름의 파일이 있는경우 내용이 모두 덮어지면서 기존의 내용 삭제됨.
    // $myfile=fopen("newfile.txt","w") or die("Unable to open file");
    // $txt = "gentacle\n";
    // fwrite($myfile,$txt);
    // $txt="roze\n";
    // fwrite($myfile,$txt);
    // fclose($myfile);

    ?>
  </body>
</html>
