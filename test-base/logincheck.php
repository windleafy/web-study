<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")  
    {  
		session_start();
		$user = $_POST["username"]; //echo "<script>alert('".$user."');</script>"; 
        $psw = $_POST["password"]; //echo "<script>alert('".$psw."');</script>"; 
        if($user == "" || $psw == "")  
        {  
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";  
        }  
        else 
        {  
/*            mysql_connect("localhost","root","ydfdbpdo");  
            mysql_select_db("user");  
            mysql_query("set names 'utf8'");  
            $sql = "select username,password from user where username = '$_POST[username]' and password = '$_POST[password]'";  
            $result = mysql_query($sql);  
            $num = mysql_num_rows($result); */ 
			
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "ydfdbpdo";
			try {
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				// 设置 PDO 错误模式为异常
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//数据库查询测试-开始
				$sql = "SELECT userName FROM user WHERE userName = '$_POST[username]' and password = '$_POST[password]'";
			    foreach ($conn->query($sql) as $row) {//echo "<script>alert('hello');</script>";
					//print $row['userName'] . "\n"  能够进入此循环，表示账密匹配成功;
					//echo('恭喜你，登录成功');
					$conn = null;
					$_SESSION['userName'] = $row['userName'];
					header("location:welcome.php");
        		}//数据库查询测试-结束
				$conn = null;
				echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>"; 
			}
			catch(PDOException $e)
			{
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
			
/*            if($num)  
            {  
                $row = mysql_fetch_array($result);  //将数据以索引方式储存在数组中  
                echo $row[0];  
            }  
            else 
            {  
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";  
            } */ 
        }  
    }  
    else 
    {  
        echo "<script>alert('提交未成功！');";  
		header("location:login.php");
    }  
   
?>
</body>
</html>