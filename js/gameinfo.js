/* ----比赛信息处理---- */
/*--------------------*/

var player=new Array();		
//运动员信息赋值
function setPlayerTable() {
	for(var i=0;i<12;i++){
		player[i]=new Array(); 
		for(var j=0;j<3;j++){
			player[i][j]=1;
		}
	}
	player[0][0] = 'images/kof-1.ico';
	player[0][1] = 'play1';
	player[0][2] = 'images/CN@3x.png';

	player[1][0] = 'images/kof-2.ico';
	player[1][1] = 'play2';
	player[1][2] = 'images/DE@3x.png';

	player[2][0] = 'images/kof-3.ico';
	player[2][1] = 'play3';
	player[2][2] = 'images/JP@3x.png';

	player[3][0] = 'images/kof-4.ico';
	player[3][1] = 'play4';
	player[3][2] = 'images/FR@3x.png';

	player[4][0] = 'images/kof-5.ico';
	player[4][1] = 'play5';
	player[4][2] = 'images/GB@3x.png';

	player[5][0] = 'images/kof-6.ico';
	player[5][1] = 'play6';
	player[5][2] = 'images/ES@3x.png';


	player[6][0] = 'images/kof-1.ico';
	player[6][1] = 'play1';
	player[6][2] = 'images/CN@3x.png';

	player[7][0] = 'images/kof-2.ico';
	player[7][1] = 'play2';
	player[7][2] = 'images/DE@3x.png';

	player[8][0] = 'images/kof-3.ico';
	player[8][1] = 'play3';
	player[8][2] = 'images/JP@3x.png';

	player[9][0] = 'images/kof-4.ico';
	player[9][1] = 'play4';
	player[9][2] = 'images/FR@3x.png';

	player[10][0] = 'images/kof-5.ico';
	player[10][1] = 'play5';
	player[10][2] = 'images/GB@3x.png';

	player[11][0] = 'images/kof-6.ico';
	player[11][1] = 'play6';
	player[11][2] = 'images/ES@3x.png';
}

var group=new Array();
var groupNum;
var fighttime=new Array();
//比赛分组信息赋值		
function setPlayerGroup(){

	//两两分组匹配战斗，每组首元素定义红方，次元素定义蓝方
	group[0]=[player[0],player[3]];
	//alert(group[0][0]);alert(group[0][1]);
	group[1]=[player[1],player[4]];
	//alert(group[1][0]);alert(group[1][1]);
	group[2]=[player[2],player[5]];
	//alert(group[2][0]);alert(group[2][1]);
	group[3]=[player[6],player[9]];
	group[4]=[player[7],player[10]];
	group[5]=[player[8],player[11]];
	
	groupNum=group.length;
	
	for(var i=0;i<groupNum;i++){
		fighttime[i]='截止时间：20180505'; 
	}			
}


var currentGroup=0;
//单场比赛信息赋值
function createTable() {
	for (var k = 0; k <3 ; k++){
		if (currentGroup<3){var x=document.getElementById("table"+k);}
		else{k=3;}
		var data = new Array();
		data.push(fighttime[currentGroup]+'<br>');
		data.push('<table class="swiper-div-center" border=1><tbody>');




		for (var i = 0; i < 3; i++) {
			data.push('<tr>');
			for (var j = 0; j < 3; j++) {
				//每场战斗九个单元格依次赋值
				if ((i==0)&&(j==0)){data.push('<td>' + '<img src="'+group[currentGroup][0][0]+'" width="64" height="64" >' + '</td>');}
				if ((i==0)&&(j==1)){data.push('<td>' + 'VS' +'</td>');}						
				if ((i==0)&&(j==2)){data.push('<td>' + '<img src="'+group[currentGroup][1][0]+'" width="64" height="64" >' + '</td>');}
				if ((i==1)&&(j==0)){data.push('<td>' + group[currentGroup][0][1] +'</td>');}
				if ((i==1)&&(j==1)){data.push('<td>' + '' +'</td>');}
				if ((i==1)&&(j==2)){data.push('<td>' + group[currentGroup][1][1] +'</td>');}
				if ((i==2)&&(j==0)){data.push('<td>' + '<img src="'+group[currentGroup][0][2]+'" height="30" >' + '</td>');}
				if ((i==2)&&(j==1)){data.push('<td>' + '' +'</td>');}
				if ((i==2)&&(j==2)){data.push('<td>' + '<img src="'+group[currentGroup][1][2]+'" height="30" >' + '</td>');}
			}
		data.push('</tr>');
		}
	
		data.push('</tbody><table><br>');
		
		if (currentGroup<3){x.innerHTML=data.join('');}
		else{
			document.getElementById("tablex").innerHTML = data.join('');
		}
		//tableN就是id为tableN的div
		//prompt(data.join(''));
		currentGroup = currentGroup+1;
	}
}