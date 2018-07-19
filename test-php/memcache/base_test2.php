<?php
 
	//����
	$mem = new Memcache;
	$mem->connect("127.0.0.1", 11211) or die ("Could not connect");
	//��ʾ�汾
	$version = $mem->getVersion();
	echo "Memcached Server version: ".$version."<br>";
	//��������
	$mem->set('key1', 'This is first value', 0, 60);
	$val = $mem->get('key1');
	echo "Get key1 value: " . $val ."<br>";
	//�滻����
	$mem->replace('key1', 'This is replace value', 0, 60);
	$val = $mem->get('key1');
	echo "Get key1 value: " . $val . "<br>";
	//��������
	$arr = array('aaa', 'bbb', 'ccc', 999);
	$mem->set('key2', $arr, 0, 60);
	$val2 = $mem->get('key2');
	echo "Get key2 value: ";
	print_r($val2);
	echo "<br>";
	
	//������������л�,�����紫���ʱ��Ϊ�˱�֤���������͵Ĳ���ʧ�������л����ٷ���.
	$arr1=serialize($arr);
	$arr2=json_encode($arr1);
	print_r($arr2);
	echo "<br>";
	

	
	//ɾ������
	$mem->delete('key1');
	$val = $mem->get('key1');
	echo "Get key1 value: " . $val . "<br>";
	//�����������
	$mem->flush();
	$val2 = $mem->get('key2');
	echo "Get key2 value: ";
	print_r($val2);
	echo "<br>";
	//�ر�����
	$mem->close();
 
?>