$(function(){
	$("#backward").click(function(){
		var left = parseInt($(".smallpic_wrap ul").css("left")); //获取ul水平方向偏移量
		var offset = left + 62;
		if (offset <= 0){
			$(".smallpic_wrap ul").stop(true,false).animate({left:offset},"slow",'',function(){
				//动画完成之后，判断是否到了左边缘
				if ( parseInt($(".smallpic_wrap ul").css("left")) >= 0 ){
					$("#backward").removeClass("on").addClass("off");
				}
			});
			//开启右边的按钮
			$("#forward").removeClass("off").addClass("on");			
		}
		
		$(this).blur(); //去除ie 虚边框
	});

	//点击前进
	$("#forward").click(function(){
		var left = parseInt($(".smallpic_wrap ul").css("left")); //获取ul水平方向偏移量
		var len = $(".smallpic_wrap li").length * 62; //获取图片的整体宽度(图片数 * 图片宽度)558
		var offset = left - 62;
		if (offset >= -(len - 62*5)){
			$(".smallpic_wrap ul").stop(true,false).animate({left:offset},"slow",'',function(){
				//判断是否到了右边缘
				if ( parseInt($(".smallpic_wrap ul").css("left")) <= -(len - 62*5) ){
					$("#forward").removeClass("on").addClass("off");
				}
			});
			//开启左边的按钮
			$("#backward").addClass("on").removeClass("off");
			
		}
		
		$(this).blur(); //去除ie 虚边框
	});
});

