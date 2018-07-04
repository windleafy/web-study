// JavaScript Document

var holdPosition = 0;
var mySwiper = new Swiper('.swiper-container',{
  slidesPerView:'auto',
  mode:'vertical',
  watchActiveIndex: true,
  onTouchStart: function() {
    holdPosition = 0;
  },
  onResistanceBefore: function(s, pos){
    holdPosition = pos;
  },
  onTouchEnd: function(){
    if (holdPosition>100) {
      mySwiper.setWrapperTranslate(0,100,0)
      mySwiper.params.onlyExternal=true
      $('.preloader').addClass('visible');
	loadNewSlides();
	}
  }
})
var slideNumber = 0;
function loadNewSlides(){
	//alert(currentGroup);alert(groupNum);
	var table = 0;		//0 处理主页对战列表；1 处理记录页列表；2处理商城列表
	crtGroup = currentGroup;
	grpNum = groupNum;
	if ((currentGroup==0)&&(groupNum==0)){
		crtGroup = currentGroup2;
		grpNum = groupNum2;
		table = 1;	
	}
	
	if (crtGroup<grpNum){//此处为是否有新条目的开关
		setTimeout(function(){
		  //Prepend new slide
		  var colors = ['red','blue','green','orange','pink'];
		  var color = colors[Math.floor(Math.random()*colors.length)];

		  var x = crtGroup;
		  //mySwiper.prependSlide('<div '+data.join('')+' id="table'+x+'" style="border: 1px solid black" value="'+currentGroup+'">jphtml.com '+slideNumber+'</div>');	
		  mySwiper.prependSlide('<div id="table'+x+'" style="border: 1px solid black" value="'+crtGroup+'">jphtml.com '+slideNumber+'</div>');	
		  
		  if( table==0){createTable1();}
		  else{createTable2();}
		  
			
	
		  //Release interactions and set wrapper
		  mySwiper.setWrapperTranslate(0,0,0)
		  mySwiper.params.onlyExternal=false;
		  //Update active slide
		  mySwiper.updateActiveSlide(0)
		  //Hide loader
		  $('.preloader').removeClass('visible');
		},1000)
		slideNumber++;
	}
	else{
		setTimeout(function(){
		  //Prepend new slide
		  //var colors = ['red','blue','green','orange','pink'];
		  //var color = colors[Math.floor(Math.random()*colors.length)];
		  //mySwiper.prependSlide('<div class="title">jphtml.com '+slideNumber+'</div>', 'swiper-slide '+color+'-slide');
		  //Release interactions and set wrapper
		  mySwiper.setWrapperTranslate(0,0,0)
		  mySwiper.params.onlyExternal=false;
		  //Update active slide
		  mySwiper.updateActiveSlide(0)
		  //Hide loader
		  $('.preloader').removeClass('visible');
		},1000)
		//slideNumber++;
	}
}