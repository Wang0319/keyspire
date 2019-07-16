$(document).ready(function(){
    $("#home_icon").click(function(){
    	init_sidebar();
        $("#home_icon img").attr("src", "../assets/img/main_container/mc-menu-properties-selected@2x.png");
    });
    $("#cash_icon").click(function(){
    	init_sidebar();
        $("#cash_icon img").attr("src", "../assets/img/main_container/mc-menu-real-time-selected@2x.png");
    });
    $("#portfolio_icon").click(function(){
    	init_sidebar();
        $("#portfolio_icon img").attr("src", "../assets/img/main_container/mc-menu-portfolio-selected@2x.png");
    });
    $("#potential_icon").click(function(){
    	init_sidebar();
        $("#potential_icon img").attr("src", "../assets/img/main_container/mc-menu-potential-selected@2x.png");
    });
    $("#calculator_icon").click(function(){
    	init_sidebar();
        $("#calculator_icon img").attr("src", "../assets/img/main_container/mc-menu-mortgage-selected@2x.png");
    });
    // $("#about_icon").click(function(){
    // 	init_sidebar();
    //     $("#about_icon img").attr("src", "../assets/img/main_container/mc-menu-about-selected@2x.png");
    // });
    // $("#settings_icon").click(function(){
    // 	init_sidebar();
    //     $("#setting_icon img").attr("src", "../assets/img/main_container/mc-menu-settings-selected@2x.png");
    // });
});

function init_sidebar() {
	$("#home_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
	$("#cash_icon img").attr("src", "../assets/img/Main_Container/mc-menu-real-time@2x.png");
	$("#portfolio_icon img").attr("src", "../assets/img/Main_Container/mc-menu-portfolio@2x.png");
	$("#potential_icon img").attr("src", "../assets/img/Main_Container/mc-menu-potential@2x.png");
	$("#calculator_icon img").attr("src", "../assets/img/Main_Container/mc-menu-mortgage@2x.png");
	// $("#about_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
	// $("#settings_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
}