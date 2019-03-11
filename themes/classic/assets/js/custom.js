$(document).ready(function(){
    $(".swtch-attr-selected").html($(".opt-col-slctd").attr("data-variantname"));

    $(".usr-nlgd").click(function(){
        $(".box-cont-polg").fadeIn();
    });

    $(".cls-pooplgn").click(function(){
        $(".box-cont-polg").fadeOut();
    });

    $(".icc-tggl-clmft").click(function(){
        $(".babalu-product-left").toggleClass("expanded");
        $(".boxcard-minicart").toggleClass("out-boxcard-minicart");
    });

    $(".cls-boscard-mincrt").click(function(){
        $(".babalu-product-left").toggleClass("expanded");
        $(".boxcard-minicart").toggleClass("out-boxcard-minicart");
    });

    $(".lst-itm-clrtl").click(function(){
        $(this).find("ul").fadeToggle();
    });
});