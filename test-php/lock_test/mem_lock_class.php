<?php
header("Content-type: text/html; charset=utf-8");
useLock();


function useLock(){
    $lockobj = new cacheLock();
    $lock = $lockobj->Lock('lockname');
    if(!$lock){
        echo "lockname is lock";
        return;
    }

    /*  热点代码 写在这里
     */
	echo 'do it';
	//sleep(2);

    $lockobj->unLock('lockname');
}


class cacheLock{
    const KEY_PREFIX = 'lock_';
    private $mc;

    public function __construct(){
        //$this->mc = new dlufMemcache('127.0.0.1',11211);
		$this->mc = new Memcache();
		$this->mc->connect('localhost',11211);
    }

    /**
     * 进行锁操作
     * @param [type]  $lock_id
     * @param integer $expire
     */
    public function Lock($lock_id,$expire=120){
        $mkey = self::KEY_PREFIX.$lock_id; 
		//echo '<br>$mkey:'.$mkey.'<br>';
        for($i = 0; $i < 10; $i++){ 
            $flag = false;
            try{
                $flag = $this->mc->add($mkey,'1',false,$expire);
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
        $mkey = self::KEY_PREFIX.$lock_id;
        $ret = $this->mc->get($mkey);
        if(empty($ret) || $ret === false){
            return false;
        }
        return true;
    }

    /**
     * 解锁
     * @param  [type] $lock_id
     * @return [type]
     */
    public function unLock($lock_id){
        $mkey = self::KEY_PREFIX.$lock_id;
        $ret = $this->mc->delete($mkey);
        return $ret;
    }

 }
 ?>