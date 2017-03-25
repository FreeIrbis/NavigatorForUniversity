	
			
	function sliderJS (obj, sl) { // slider function
		 var ul = $(sl).find("ul"); // ������� ����
		 var bl = $(sl).find("li.slider"+obj); // ������� ����� �� ��������� �����
		 var step = $(bl).width(); // ������ �������
		 $(ul).animate({marginLeft: "-"+step*obj}, 500); // 500 ��� �������� ���������
	}
					
			$(document).ready(function() {
			 $(".slider").each(function () { // ������������ ������ �������

			  var obj = $(this);
			  $(obj).append("<div class='nav'></div>");
			  $(obj).find("li").each(function () {
			   $(obj).find(".nav").append("<span rel='"+$(this).index()+"'></span>"); // ��������� ���� ���������
			   $(this).addClass("slider"+$(this).index());
			  });
			  $(obj).find("span").first().addClass("on"); // ������ �������� ������ ������� ����
			 });
			 
	
			
		$(".slider .nav span").click(function() { // slider click navigate
			var sl = $(this).closest(".slider"); // �������, � ����� ����� ��� ����
			 $(sl).find("span").removeClass("on"); // ������� �������� �������
			 $(this).addClass("on"); // ������ �������� �������
			 var obj = $(this).attr("rel"); // ������ ��� �����
			 sliderJS(obj, sl); // �������
			 return false;
		});
		
		$('.photo-btn').click(function(){
			 $('.show-modal').arcticmodal();
		});
	
});