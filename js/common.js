$(".tab").click(function(e) {
    var getId = $(this).attr("data");
	$(".tab").removeClass("brown");
	$(".tab").addClass("grey");
	$(this).addClass("brown");
	$(this).removeClass("grey ");
	$(".hideToggle").css({"display":"none"});
	$("."+getId).css({"display":"block"});
});
