$(document).ready(function(){
    $("#home_icon").click(function(){
    	init_content();
        $("#home_icon img").attr("src", "../assets/img/main_container/mc-menu-properties-selected@2x.png");
        // $("#home_l").attr("style", "display:block;");
        // $("#home_r").attr("style", "display:block;");
    });
    $("#cash_icon").click(function(){
    	init_content();
        $("#cash_icon img").attr("src", "../assets/img/main_container/mc-menu-real-time-selected@2x.png");
        // $("#cash_l").attr("style", "display:block;");
        // $("#cash_r").attr("style", "display:block;");
    });
    $("#portfolio_icon").click(function(){
    	init_content();
        $("#portfolio_icon img").attr("src", "../assets/img/main_container/mc-menu-portfolio-selected@2x.png");
        // $("#portfolio_l").attr("style", "display:block;");
        // $("#portfolio_r").attr("style", "display:block;");
    });
    $("#potential_icon").click(function(){
    	init_content();
        $("#potential_icon img").attr("src", "../assets/img/main_container/mc-menu-potential-selected@2x.png");
        // $("#potential_l").attr("style", "display:block;");
        // $("#potential_r").attr("style", "display:block;");
    });
    $("#calculator_icon").click(function(){
    	init_content();
        $("#calculator_icon img").attr("src", "../assets/img/main_container/mc-menu-mortgage-selected@2x.png");
        // $("#calculator_l").attr("style", "display:block;");
        // $("#calculator_r").attr("style", "display:block;");
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

function init_content() {
	$("#home_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
	$("#cash_icon img").attr("src", "../assets/img/Main_Container/mc-menu-real-time@2x.png");
	$("#portfolio_icon img").attr("src", "../assets/img/Main_Container/mc-menu-portfolio@2x.png");
	$("#potential_icon img").attr("src", "../assets/img/Main_Container/mc-menu-potential@2x.png");
	$("#calculator_icon img").attr("src", "../assets/img/Main_Container/mc-menu-mortgage@2x.png");
	// $("#about_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
	// $("#settings_icon img").attr("src", "../assets/img/main_container/mc-menu-properties@2x.png");
    // $("#home_l").attr("style", "display:none;");
    // $("#home_r").attr("style", "display:none;");
    // $("#cash_l").attr("style", "display:none;");
    // $("#cash_r").attr("style", "display:none;");
    // $("#portfolio_l").attr("style", "display:none;");
    // $("#portfolio_r").attr("style", "display:none;");
    // $("#potential_l").attr("style", "display:none;");
    // $("#potential_r").attr("style", "display:none;");
    // $("#calculator_l").attr("style", "display:none;");
    // $("#calculator_r").attr("style", "display:none;");
}