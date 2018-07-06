/* ----商城信息处理---- */
/*--------------------*/
var swiperInt = 3;
function createDiv(){
/*	for (var i = 0; i<swiperInt; i++){
		var div = document.getElementById('swiper-mall');	
		var child_1_div = document.createElement('div');		
		child_1_div.id="table"+i; 		
		child_1_div.setAttribute("class","swiper-slide swiper-slide-visible"); 		
		div.appendChild(child_1_div);
	}*/
	for (var i = 0; (i < swiperInt*2); i++){
		var j = Math.floor(i/2);//console.log(j);
		var div = document.getElementById('table'+j);
		var child_2_div = document.createElement('div');  
		child_2_div.id='div'+i;
		
		//向跳转页面传值
		var x = JSON.stringify(mall[i]);
		x = encodeURI(x);
		var tmp = [];//location='shopDetail.php?txt=encodeURI(x)'
		tmp.push("location='shopDetail.php");
		tmp.push("?txt="+x);
		tmp.push("'");
		//console.log(data.join(''));
		child_2_div.setAttribute("onclick",tmp.join('')); 
		div.appendChild(child_2_div);	
	}
};

groupNum3 = 0;
currentGroup3 = 0;
itemNum = 0;
function createTable3() {
	'use strict';
	//console.log(mall);
	//getgameinfo();//console.log(getgameinfo);console.log(gamesinfo[0].playerR);
	groupNum3 = mall.length;//console.log(groupNum3);//console.log(mall[itemNum]['name']);

	for (var i = 0; ((i < swiperInt)&&(i < Math.ceil(mall.length/2))); i++) {
		//console.log(Math.ceil(mall.length/2));
		if (currentGroup3 >= (swiperInt-1)){i = swiperInt};
		//console.log(currentGroup3);
		createItem();
		
		if (itemNum < mall.length){
			//上述再来一遍
			//console.log('hello');
			createItem();
		}
		currentGroup3 = currentGroup3 + 1;
	}
};
function createItem(data){
	'use strict';
	var data = [];
	data.push('<div class="mallItem">');
	data.push('<img id="itemIcon" src="');
	data.push(mall[itemNum]['icon']);
	data.push('" height="80">');
	data.push('<p class="line" id="itemName">');
	data.push(mall[itemNum]['name']);
	data.push('</p>');
	data.push('<p class="line" id="leftNum">剩余:');
	data.push(mall[itemNum]['leftNum']);
	data.push('</p>');
	data.push('<div class="goldbg"><p class="itemPrice">金币<span id="price">');
	data.push(mall[itemNum]['price']);
	data.push('</span></p></div></div>');
	//console.log(data.join(''));
	if (currentGroup3<swiperInt){
		document.getElementById("div"+itemNum).innerHTML=data.join('');
	}
	else{
		var div = document.getElementById('table'+currentGroup3);
		var childdiv = document.createElement('div');  
		childdiv.id='div'+itemNum;
		
		//向跳转页面传值
		var x = JSON.stringify(mall[itemNum]);
		x = encodeURI(x);
		var tmp = [];//location='shopDetail.php?txt=encodeURI(x)'
		tmp.push("location='shopDetail.php");
		tmp.push("?txt="+x);
		tmp.push("'");
		//console.log(data.join(''));
		childdiv.setAttribute("onclick",tmp.join('')); 		

		div.appendChild(childdiv);
		document.getElementById("div"+itemNum).innerHTML=data.join('');
	}
	itemNum = itemNum + 1;
}
