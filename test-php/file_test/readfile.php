<br>readfile<br>
<?php
header("Content-type: text/html; charset=utf-8"); 
echo readfile("res/webdictionary.txt");
//readfile没有关闭文件的操作
?>
	
<br><br>fopen<br>
<?php
$myfile = fopen("res/webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("res/webdictionary.txt"));
fclose($myfile);
?>

<br><br>fgets<br>
<?php
$myfile = fopen("res/webdictionary.txt", "r") or die("Unable to open file!");
// 输出单行直到 end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<br><br>fgetc<br>
<?php
$myfile = fopen("res/webdictionary.txt", "r") or die("Unable to open file!");
// 输出单字符直到 end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>

<br><br>createfile<br>
<?php
$myfile = fopen("res/newfile.txt", "w") or die("Unable to open file!");
date_default_timezone_set('PRC');
$t = date('Y-m-d H:i:s',time());
fwrite($myfile, $t."\n");
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);

rewind($myfile);
echo(ftell($myfile).'<br>');
echo(readfile("res/newfile.txt").'<br>');
fclose($myfile);

$myfile = fopen("res/newfile.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>


