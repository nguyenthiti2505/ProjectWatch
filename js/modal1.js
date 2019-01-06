$( document ).ready(function() {      
    $(".clickable").click(function() {  
        $(this).addClass("grown");  
        $(this).removeClass("spot");
    });   

    $(".close_button").click(function() {  
        alert (this);
        $("#spot1").removeClass("grown");  
        $("#spot1").addClass("spot");
    });   
});