<!DOCTYPE HTML>  
<html>  
<head>  
    <meta charset="utf-8">  
    <meta name="renderer" content="webkit|ie-comp|ie-stand">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />  
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />  
    <title>nav</title>  
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">  
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">  
  
    <link rel="stylesheet" href="css/style.css">  
    <link rel="stylesheet" href="css/bootstrap.css">  
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.js"></script>  
	
	<script type="text/javascript" src="js/gameinfo.js">/*-- 比赛信息处理 --*/</script>
	<script type="text/javascript" src="php/getDbPlayers.php">/*此处取回players的值*/</script> 
	<script type="text/javascript" src="php/getDbGames.php">/*此处取回games的值*/</script> 

</head>  
	
<body style="background:transparent;">
	
<script language="javascript" type="text/javascript">
	//接受跳转时传来的值
	var loc = location.href;
	var n1 = loc.length;//地址的总长度
	var n2 = loc.indexOf("=");//取得=号的位置
	var id = decodeURI(loc.substr(n2+1, n1-n2));//从=号后面的内容
	
	/*console.log'第二页－本场比赛ID：'+id);
	console.log('games and players');
	console.log(games);
	console.log(players);
	*/
	getgameinfo();
	//console.log('gamedetail-gamesinfo');console.log(gamesinfo);
	//console.log('第二页－gamesinfo.length：'+gamesinfo.length);
	gamedetail = [];
	for (var i = 0; i < gamesinfo.length; i++){
		if (id == gamesinfo[i].id){
			//console.log('gamesinfo['+i+']');//console.log(gamesinfo[i]);
			i = gamesinfo.length;
		}			
	}

</script>
	
<p style="color:blueviolet">hello world</p>
<p></p>
<p></p>
<p></p>
</body>
</html>
