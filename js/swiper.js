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
	if (currentGroup<groupNum){//此处为是否有新条目的开关
		setTimeout(function(){
		  //Prepend new slide
		  var colors = ['red','blue','green','orange','pink'];
		  var color = colors[Math.floor(Math.random()*colors.length)];
			
			
			
			
		  var data = [];
		  
		  //----处理跳转链接----开始
		  data.push('onclick="location=');
		  alert('38 currentGroup'+currentGroup);
		  var s = currentGroup;
		  var str = encodeURI(s);
		  //data.push("'welcome.php?txt=str'");
		  data.push("'gamedetail.php?txt=");
		  data.push(str);
		  data.push("'");
		  //location.href="gamedetail.php?"+"txt="+encodeURI(s);
		  //var str="gamedetail.php?"+"txt="+encodeURI(s);
		  data.push('"');//alert(data.join(''));//onclick="location='gamedetail.php'"	
		  //----处理跳转链接----结束
			
		  var x = currentGroup;
		  mySwiper.prependSlide('<div '+data.join('')+' id="table'+x+'" style="border: 1px solid black" value="'+currentGroup+'">jphtml.com '+slideNumber+'</div>');	
		
		
			
		
		  createTable1();
	
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