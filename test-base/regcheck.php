<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php  
    if(isset($_POST["Submit"]) && $_POST["Submit"] == "注册")  
    {  
        $user = $_POST["userName"];  
        $psw = $_POST["password"];  
        $psw_confirm = $_POST["confirm"];
		date_default_timezone_set('PRC');
		$rgt = date('Y-m-d H:i:s',time());//echo "<script>alert('".$rgt."');</script>";  
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

					// 预处理 SQL 并绑定参数
					$stmt = $conn->prepare("INSERT INTO user (id, phone, gold, username, password, regtime) 
					VALUES (:id, :phone, :gold, :username, :password, :regtime)");
					$stmt->bindParam(':id', $id);
					$stmt->bindParam(':phone', $phone);
					$stmt->bindParam(':gold', $gold);
					$stmt->bindParam(':username', $username);
					$stmt->bindParam(':password', $password);
					$stmt->bindParam(':regtime', $regtime);
							// 插入行
					$id = mt_rand(0,mt_getrandmax());
					$phone = "1333333333";
					$gold = "123456789";
					$username = $user;
					$password = $psw;
					$regtime = $rgt;
					$stmt->execute();

					echo "新记录插入成功";
				}
				catch(PDOException $e)
				{
					echo "Error: " . $e->getMessage();
				}
				$conn = null;
			}
/*            {  
                mysql_connect("localhost","root","root");   //连接数据库  
                mysql_select_db("user");  //选择数据库  
                mysql_query("set names 'utf8'"); //设定字符集  
                $sql = "select username from user where username = '$_POST[username]'"; //SQL语句  
                $result = mysql_query($sql);    //执行SQL语句  
                $num = mysql_num_rows($result); //统计执行结果影响的行数  
                if($num)    //如果已经存在该用户  
                {  
                    echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                }  
                else    //不存在当前注册用户名称  
                {  
                    $sql_insert = "insert into user (username,password,phone,gold) values('$_POST[username]','$_POST[password]','','')";  
                    $res_insert = mysql_query($sql_insert);  
                    //$num_insert = mysql_num_rows($res_insert);  
                    if($res_insert)  
                    {  
                        echo "<script>alert('注册成功！'); history.go(-1);</script>";  
                    }  
                    else 
                    {  
                        echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                    }  
                }  
            }  */
            else 
            {  
                echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
            }  
        }  
    }  
    else 
    {  
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
    }  
?>
<body>
</body>
</html>