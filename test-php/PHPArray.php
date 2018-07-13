<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>php混编测试</title>
</head>

<?php
echo 'Hello World!<br>';

$arr = array(
  array('id' => 1,'pid' => 0,'name' => '新闻分类'),
  array('id' => 2,'pid' => 0,'name' => '最新公告'),
  array('id' => 3,'pid' => 1,'name' => '国内新闻'),
  array('id' => 4,'pid' => 1,'name' => '国际新闻'),
  array('id' => 5,'pid' => 0,'name' => '图片分类'),
  array('id' => 6,'pid' => 5,'name' => '新闻图片'),
  array('id' => 7,'pid' => 5,'name' => '其它图片')
);

$tmp=$arr[0];
$tmp['childred'][]=$arr[2];
$tmp['childred'][]=$arr[3];
print_r($tmp);
print_r('<br><br><br><br><br><br>');

foreach ($arr as $k => $v) {
	print_r($k);
	echo('<br>');	
	print_r($v);
	echo('<br>');
	print_r($v['id']."    ".$v['pid'].'    '.$v['name']);
	echo('<br>');
}
  
$output_array =make_tree($arr, 0, 'id|pid|children');
foreach ($output_array as $k => $v) {
	print_r($v);
	echo('<br>');	
}

foreach ($output_array as $key => $value) {
  echo '<h2>'.$value['name'].'</h2>';
  foreach ($value['children'] as $key => $value) {
    echo $value['name'].',';
  }
}


function make_tree($arr, $pid = 0, $column_name = 'id|pid|children') {
  list($idname, $pidname, $cldname) = explode('|', $column_name);
  $ret = array();
  foreach ($arr as $k => $v) {
    if ($v [$pidname] == $pid) {
      $tmp = $arr [$k];
      unset($arr [$k]);
      $tmp [$cldname] = make_tree($arr, $v [$idname], $column_name);
      $ret [] = $tmp;
    }
  }
  return $ret;
}


?>

<body>
</body>
</html>
