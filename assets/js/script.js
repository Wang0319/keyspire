$(document).ready(function(){
	$(".btn_radio").click(function(){
        $(".btn_radio").removeClass("btn_radio-active");
        $(this).addClass("btn_radio-active");
        var idName;
        idName = $(this).attr("id") + "_detail";
        $(".right_main").css("display", "none");
        $("#"+idName).css("display", "block");
        $(".top_title_r").text($("#" + $(this).attr("id")).text());
    })
})

	