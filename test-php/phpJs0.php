<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP JS JSON</title>
</head>

<!--PHP传值给JS--Begin-->

<!--数组传值-->
<?php
//PHP中的变量$ar传值给JS

$ar = array('苹果', '桔子', '香蕉', '草莓');
echo json_encode($ar); //此处中文会显示unicode编码["\u82f9\u679c","\u6854\u5b50","\u9999\u8549","\u8349\u8393"]
echo '<br>';
?>
<script type="text/javascript">
// pass PHP variable declared above to JavaScript variable
var ar = <?php echo json_encode($ar) ?>;
//alert(ar);
console.log(ar);
document.write(ar+'<br>');//此处会将unicode编码输出为中文
</script>

<!--对象传值-->
<?php
//PHP对象（关联数组）传值给JS
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
echo json_encode($age);
echo '<br>';
?>
<script type="text/javascript">
//JS接收对象（PHP的关联数组）
var age = <?php echo json_encode($age) ?>;
//alert(age);
//alert(age.Peter);
console.log(age);
</script>
	
<!--对象传值-->
<?php
//PHP对象（关联数组）传值给JS
$player = array(
	array("name"=>"peter","age"=>"37","high"=>"175"),
	array("name"=>"mike","age"=>"35","high"=>"180")
	);
echo json_encode($player);
echo '<br>';
?>
<script type="text/javascript">
//JS接收对象（PHP的关联数组）
var player = <?php echo json_encode($player) ?>;
//alert(age);
//alert(age.Peter);
console.log(player);
</script>
	
	
	
	

<!--二维数组传值-->
<?php
// 二维数组: 
$cars = array 
( 
    array("Volvo",100,96), 
    array("BMW",60,59), 
    array("Toyota",110,100) 
); 
print_r($cars);
echo '<br>'; 
?>
<script type="text/javascript">
var cars = <?php echo json_encode($cars) ?>;
//alert('cars:'+cars);
//alert('cars[0]:'+cars[0]);
console.log(cars);
</script>
<!--PHP传值给JS--End-->


<!------Json_decode Test------>
<?php
$json = '["apple","orange","banana","strawberry"]';
$ar = json_decode($json);	//字符串转成php数组
// access first element of $ar array
echo '<br><br>----Json_decode Test----<br>';
echo $ar[0].'<br>'; // apple
print_r ($ar);
echo '<br>';


$json = '{
    "title": "JavaScript: The Definitive Guide",
    "author": "David Flanagan",
    "edition": 6
}';
$book = json_decode($json);	//字符串转成php数组
// access title of $book object
echo $book->title; // JavaScript: The Definitive Guide 
echo '<br>';
print_r($book);
echo '<br>';

//JSON String to Multidimensional Array
$json = '[
    {
        "title": "Professional JavaScript",
        "author": "Nicholas C. Zakas"
    },
    {
        "title": "JavaScript: The Definitive Guide",
        "author": "David Flanagan"
    },
    {
        "title": "High Performance JavaScript",
        "author": "Nicholas C. Zakas"
    }
]';

$books = json_decode($json);	//字符串转成php数组
// access property of object in array
echo $books[1]->title; // JavaScript: The Definitive Guide

?>
<!------Json_decode Test------>

<body>
</body>
</html>