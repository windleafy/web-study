<?php
 
$memcache = new Memcache;
$memcache->connect('127.0.0.1',11211) or die('shit');
 
$memcache->set('key','hello memcache!');
 
$out = $memcache->get('key');
 
echo $out."<br/>\n";

$version = $memcache->getVersion();
echo "Server's version: ".$version."<br/>\n";

$tmp_object = new stdClass;
$tmp_object->str_attr = 'test';
$tmp_object->int_attr = 123;

$memcache->set('key', $tmp_object, false, 10) or die ("Failed to save data at the server");
echo "Store data in the cache (data will expire in 10 seconds)<br/>\n";

$get_result = $memcache->get('key');
echo "Data from the cache:<br/>\n";

var_dump($get_result);
echo "<br/>\n".json_encode($get_result);

?>