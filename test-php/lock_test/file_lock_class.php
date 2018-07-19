<?php
header("Content-type: text/html; charset=utf-8");

$fp = fopen('./lock.txt','r');
$try = 10;  //声明一个变量表示要获取的次数，防止死循环
do{
    $lock = flock($fp, LOCK_EX | LOCK_NB);
    if(!$lock)
        usleep(500); //如果没有获取到锁，释放CPU，休息5000毫秒
}
while(!$lock && --$try >=0 );

if($lock) {
	
	$servername = "localhost";
	$username = "root";
	$password = "root";

	// 创建连接
	try {
		$conn = new PDO("mysql:host=$servername;dbname=ydfdbpdo", $username, $password);
		echo "连接成功<br>"; 
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT stock FROM warehouse"); 
		$stmt->execute();
		// 设置结果集为关联数组
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 		

		foreach(($stmt->fetchAll()) as $k=>$v) { 
			//print_r($v);
			$ret[]=$v;
			//echo '</br>';
		}
		//$ret=json_encode($ret);
		//echo $ret[0]["stock"];
		
		$stock=$ret[0]["stock"];
		if( $stock < 1) {
			die('<br>库存不足');
		}
		else{
			$new_stock = $stock - 1;
			$x=1;
			$stmt = $conn->prepare('UPDATE warehouse SET stock = '.$new_stock. " WHERE id = ".$x);
			$stmt->execute();//减库存操作
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}	
	//sleep(5);//方便并发测试参数
	flock($fp, LOCK_UN);
	fclose($fp);
}
else{ 
	die('系统繁忙！'); 
}


class fileLock{
    const KEY_PREFIX = 'lock_';
    private $fp;
    public function __construct(){
        $fkey = self::KEY_PREFIX.$lock_id; 
		//echo '<br>$mkey:'.$mkey.'<br>';
		$this->fp = fopen('./'.$fkey,'r');	//此处需要根据锁名，创建文件
    }

    /**
     * 进行锁操作
     * @param [type]  $lock_id
     * @param integer $expire
     */
    public function Lock($lock_id){
        for($i = 0; $i < 10; $i++){ 
            $flag = false;
            try{
                $flag = flock($this->fp, LOCK_EX | LOCK_NB);
            }catch(Exception $e){
                $flag = false;
                //log
            }
            if($flag){
                return true;
            }else{ 
                //wait for 0.1 seconds
				//$this->mc->delete($mkey);//	发生死锁时，此开关可清理
                usleep(100000);
            }
        }
        return false;
    }
	
    /**
     * 判断锁状态
     * @param  [type]  $lock_id
     * @return boolean
     */
    public function isLock($lock_id){
        //$mkey = self::KEY_PREFIX.$lock_id;
        //$ret = $this->fp->get($mkey);
		$ret = flock($this->fp, LOCK_EX | LOCK_NB);
        if(!$ret){
            return true;
        }
        return false;
		fclose($this->fp);
    }
	
    /**
     * 解锁
     * @param  [type] $lock_id
     * @return [type]
     */
    public function unLock($lock_id){
        //$mkey = self::KEY_PREFIX.$lock_id;
        //$ret = $this->fp->delete($mkey);
		//return $ret;
		flock($this->fp, LOCK_UN);
        fclose($this->fp);
    }
}

?>