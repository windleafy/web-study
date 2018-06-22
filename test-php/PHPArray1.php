<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<?php
$c = array(
  array('1','Tom'),
  array('2','Mary'),
  array('3','Peter'),
  array('4','Jack')
);

foreach ($c as $v) {
  print_r($v);
  echo "<br/>";
}

  echo "<br/>";

$d = array(
  array('id'=>'1','name'=>'Tom'),
  array('id'=>'2','name'=>'Mary'),
  array('id'=>'3','name'=>'Peter'),
  array('id'=>'4','name'=>'Jack')
);


foreach ($d as $k => $v) {
  echo '$key='.$k."<br/>";
  print_r($v);
  echo "<br/>";
}
?>
<body>
</body>
</html>