<?php
	//echo "<script>alert('hello');</script>"; 
    if(isset($_POST["button"]) && $_POST["button"] == "btnlogin")  
    {  //echo "<script>alert('hello');</script>"; 
		session_start();
		$user = $_POST["username"]; //echo "<script>alert('".$user."');</script>"; 
        $psw = $_POST["password"]; //echo "<script>alert('".$psw."');</script>"; 
        if($user == "" || $psw == "")  
        {  
            //echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
			echo '2';
        }  
        else 
        {  
			$servername = "39.106.1.194";
			$username = "root";
			$password = "wdlinux.cn";
			$dbname = "ydfdbpdo";
			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// 设置 PDO 错误模式为异常
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				//数据库查询测试-开始
				$_POST["password"] = md5($_POST["password"]);	//md5加密处理
				$sql = "SELECT userName FROM user WHERE userName = '$_POST[username]' and password = '$_POST[password]'";
			    foreach ($conn->query($sql) as $row) {//echo "<script>alert('hello');</script>";
					//print $row['userName'] . "\n"  能够进入此循环，表示账密匹配成功;
					//echo('恭喜你，登录成功');
					$conn = null;
					$_SESSION['userName'] = $row['userName'];
					echo '0';exit;
					//header("location:../index.html");
        		}//数据库查询测试-结束
				
				$conn = null;
				//echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>"; 
				echo '1';
			}
			catch(PDOException $e)
			{
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
        }  
    }  
    else 
    {  
        //echo "<script>alert('直接地址栏访问，则返回登录注册页！');";  
		header("location:../login.html");
    }  
   
?>