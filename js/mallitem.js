/* ----商城信息处理---- */
/*--------------------*/
var swiperInt = 3;
function createDiv(){
	for (var i = 0; (i < swiperInt*2); i++){
		var j = Math.floor(i/2);console.log(j);
		var div = document.getElementById('table'+j);
		
		var childdiv = document.createElement('div');  
		childdiv.id='div'+i;
		div.appendChild(childdiv);	
	}
};

groupNum3 = 0;
currentGroup3 = 0;
itemNum = 0;
function createTable3() {
	'use strict';
	console.log(mall);
	//getgameinfo();//console.log(getgameinfo);console.log(gamesinfo[0].playerR);
	groupNum3 = mall.length;//console.log(groupNum3);//console.log(mall[itemNum]['name']);

	for (var i = 0; ((i < swiperInt)&&(i < Math.ceil(mall.length/2))); i++) {
		//console.log(Math.ceil(mall.length/2));
		if (currentGroup3 >= (swiperInt-1)){i = swiperInt};
		//console.log(currentGroup3);
		createItem();
		
		if (itemNum < mall.length){
			//上述再来一遍
			console.log('hello');
			createItem();
		}
		

	}
	currentGroup3 = currentGroup3 + 1;
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
	data.push('<p class="line" id="leftNum">');
	data.push(mall[itemNum]['leftNum']);
	data.push('</p>');
	data.push('<div class="goldbg"><p class="itemPrice">￥<span id="price">');
	data.push(mall[itemNum]['price']);
	data.push('</span></p></div></div>');
	console.log(data.join(''));
	document.getElementById("div"+itemNum).innerHTML=data.join('');
	itemNum = itemNum + 1;
}