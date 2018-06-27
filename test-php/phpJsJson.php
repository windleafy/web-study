<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Json</title>
</head>

<body>


<?php 
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}'; 
var_dump($json);
echo "<hr>";
var_dump(json_decode($json)); //对json字符串编码，结果是对象
echo "<hr>";
var_dump(json_decode($json, true)); //对json字符串编码，结果是数组
echo "<hr>";


$arr= array("姓名"=>"小明","年龄"=>30);
var_dump($arr);
echo "<hr>";


$jsone=json_encode($arr);//对变量(数组)进行json编码，返回json字符串， "{"\u59d3\u540d":"\u5c0f\u660e","\u5e74\u9f84":30}"
var_dump($jsone);
echo "<hr>";
var_dump(json_decode($jsone));//再把json字符串变为对象
echo "<hr>";
var_dump(json_decode($jsone,true));//再把json字符串变为数组
?> 


<script>
// 在js中使用JSON.parse()方法用于将一个JSON字符串转换为对象。
// 经常用于ajax在php端返回使用json_encode处理的json数据，而在ajax的success方法中则需使用JSON.parse()方法将其转换为对象。
$json1='{"\u59d3\u540d":"\u5c0f\u660e","\u5e74\u9f84":30}';
	
$json2={"id":"7","gamename":"\u4e16\u754c\u5de1\u56de\u8d5b-\u83ab\u65af\u79d1\u7ad9","gamestarttime":"2018-06-30 19:39:00","gameclass":"52KG","bettinggame":"1","season":"201801","game":"1","endTime":"2018-06-15 01:00:00","allBet":"0","result":"4","playerL":"2","playerR":"1","playWay":"0","odds1_1":"1.25","odds1_2":"9.99","odds2_1":"1.25","odds2_2":"9.99","allBet1":"0","allBet2":"134"};
	
console.log(JSON.parse($json1));
console.log($json2);
console.log($json2.allBet1);
console.log($json2.allBet2);	
//alert($json1);
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
console.log(JSON.parse($json));
</script>


</body>
</html>