<?php
header("Content-type: text/html; charset=utf-8"); 
/* 从文件中读取数据到PHP变量
$json_string = file_get_contents('test.json');
// 把JSON字符串转成PHP数组
$data = json_decode($json_string, true);
// 显示出来看看
var_dump($data);
echo '<br><br>';
print_r($data);
echo '<br><br>';
//echo '编号：'.$data[0][0].' 姓名：'.$data[0][1].' 网址：'.$data[0][2];
echo '<br><br>';
//echo '编号：'.$data[1][0].' 姓名：'.$data[1][1].' 网址：'.$data[1][2];*/
?>



<?php
    //echo "json文件转成php数组<br>";

    // 文件格式  无bom utf-8  
    $json_string = file_get_contents('res/mall.json');  
      
    // 用参数true把JSON字符串强制转成PHP数组  
    $data = json_decode($json_string, true);  
      
    // 显示出来看看  
    //var_dump($json_string); 

    print_r("str = ".$json_string);

	//echo(json_encode($data[0]).'<br>');
	//echo(json_encode($data[1]).'<br>');
	//echo(json_encode($data[2]).'<br>');
	//echo('<br><br>');
	
	foreach($data as $k=>$v){
		//echo (json_encode($v).'<br>');
	}
  ?>