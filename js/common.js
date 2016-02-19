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
});

$('.carousel').carousel({
	interval: 3000
});
