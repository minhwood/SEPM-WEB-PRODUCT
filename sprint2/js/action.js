$(document).ready(function(){
    $(".cat-box").click(function(){
    if ($(this).find(".cat-box-extent").hasClass("hidden"))
        $(this).find(".cat-box-extent").removeClass("hidden")
    else 
        $(this).find(".cat-box-extent").addClass("hidden")
    });
});