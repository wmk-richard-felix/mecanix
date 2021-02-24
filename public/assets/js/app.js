$(document).on("scroll",function(){
    if($(document).scrollTop()>100){
        $("header").removeClass("large").addClass("small");
        $("#logo").width(90);
    } else{
        $("header").removeClass("small").addClass("large");
        $("#logo").width(140);
    }
});