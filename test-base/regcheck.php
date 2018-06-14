<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
    {  
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];
		$uuid = $_POST["uuid"];		echo "<script>alert('".$uuid."');</script>";
		date_default_timezone_set('PRC');
		$rgt = date('Y-m-d H:i:s',time());	//echo "<script>alert('".$rgt."');</script>";  
        if($user == "" || $psw == "" || $psw_confirm == "")  
        {  
            echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
        }  
        else 
        {  
            if($psw == $psw_confirm)  
			{
				$servername = "localhost";
				$username = "root";
				$password = "root";
				$dbname = "ydfdbpdo";

				try {
					$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
					// 设置 PDO 错误模式为异常
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					// 重名判定-开始
					$sql = "SELECT username FROM user WHERE username = '$_POST[username]'";
					foreach ($conn->query($sql) as $row) {//echo "<script>alert('hello');</script>";
					//print $row['userName'] . "\n"  能够进入此循环，表示有重名;
						$conn = null;
						echo "<script>alert('重名');</script>";
						header("Refresh:0.1;url=register.php");
						exit;
					}// 重名判定-结束

					// uuid校验-开始
					//$uuid = '1'; //检测uuid是否重复的设定常量;
					$sql = "SELECT id FROM user WHERE id = '$_POST[uuid]'";
					foreach ($conn->query($sql) as $row) {
						$conn = null;
						echo "<script>alert('系统有些许忙碌，客官请稍后');</script>";
						header("Refresh:0.1;url=register.php");
						exit;
					}
					// uuid校验-结束

					// 预处理 SQL 并绑定参数
					$stmt = $conn->prepare("INSERT INTO user (id, phone, gold, username, password, regtime) 
					VALUES (:id, :phone, :gold, :username, :password, :regtime)");
					$stmt->bindParam(':id', $id);
					$stmt->bindParam(':phone', $phone);
					$stmt->bindParam(':gold', $gold);
					$stmt->bindParam(':username', $username);
					$stmt->bindParam(':password', $password);
					$stmt->bindParam(':regtime', $regtime);

					// 插入一条数据
					//$id = mt_rand(0,mt_getrandmax());
					$id = $uuid;	//echo "<script>alert('002".$uuid."');</script>";
					$phone = "1333333333";
					$gold = "123456789";
					$username = $user;
					$password = $psw;
					$regtime = $rgt;
					$stmt->execute();
					
					$conn = null;
					echo "<script>alert('恭喜注册成功');</script>";
					header("Refresh:0.1;url=login.php");
					exit;
				}
				
				catch(PDOException $e)
				{
					echo "Error: " . $e->getMessage();
				}
				$conn = null;
			}
            else 
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else 
    {  
        //echo "<script>alert('直接地址栏访问本页，则返回登录注册页！'); history.go(-1);</script>";
		header("location:login.php");
    }  
?>
<body>
</body>
</html>