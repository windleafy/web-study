
<?php
/*-----此文件echo输出的字符串，将会出现在调用它的html Js脚本内-----*/

$action = array('apple', 'orange', 'banana', 'strawberry');
$action = json_encode($action);
echo 'x = '.$action;//此处X没有写Var，表明是Js的全局变量

/*--------------------------------------------------------
echo "document.write('".$action."')";
输出结果
document.write('hello world')
document.write('["apple","orange","banana","strawberry"]')
--------------------------------------------------------*/

 
//echo '<p align="left" id="windtest"></p>';
//echo "document.getElementById('windtest').innerHTML='".$action."'";  

//document.getElementById("demo").innerHTML = "段落已修改。"; 
?>
