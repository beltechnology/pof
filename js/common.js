$(".tab").click(function(e) {
    var getId = $(this).attr("data");
	$(".tab").removeClass("brown");
	$(".tab").addClass("grey");
	$(this).addClass("brown");
	$(this).removeClass("grey ");
	$(".hideToggle").css({"display":"none"});
	$("."+getId).css({"display":"block"});
});

$("ul li").click(function()
{
	$(this).find("i.pull-right").toggleClass("fa-minus-square-o");
	var menuId = $(this).attr("id");
	if($(".pagesLi"+menuId).hasClass('openPage'))
	{
	$(".pagesLi"+menuId).hide();
	$(".pagesLi"+menuId).removeClass('openPage');
	}
	else
	{
	$(".pagesLi"+menuId).show();
	$(".pagesLi"+menuId).addClass('openPage');
	}
	
/*	if($(this).parent().children("li.pages"))
	{
		alert($(this).parent().children("li.pages").length);
		$(this).parent().children("li.pages").css("display","block");
	}
	else
	{
		$(this).siblings(".pages").eq(0).hide();
	}
*/});

$('.carousel').carousel({
	interval: 3000
});
