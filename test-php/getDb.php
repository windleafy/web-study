<!DOCTYPE html>
<html lang="cn">
<head>
<title>PhpMysql</title>
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Name</th><th>Nation</th><th>NationFlag</th><th>PlayIcon</th><th>Age</th></tr>";
 
class TableRows extends RecursiveIteratorIterator {
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }
 
    function current() {
        //return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
		return parent::current();
    }
 
    /*function beginChildren() { 
        echo "<tr>"; 
    } 
 
    function endChildren() { 
        echo "</tr>" . "\n";
    } */
} 
 
$servername = "39.106.1.194";
$username = "root";
$password = "wdlinux.cn";
$dbname = "ydfdbpdo";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, name, nation, nationIcon, playericon, age FROM player"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
	$i = 0;
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 

		$i++;
		echo $i.'hello  '.$v;

		echo '</br>';
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>


<?php
$servername = "39.106.1.194";
$username = "root";
$password = "wdlinux.cn";
$dbname = "ydfdbpdo";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT id, name, age, nationIcon FROM player";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"].$row["nationIcon"] ."<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>

</body>
</html>