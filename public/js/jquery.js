jQuery(function($){
    $(".btn-danger").click(function(event){event.preventDefault();
        $("#overlay").fadeIn();
        $(".modalwindow").fadeIn()});
    $(".closemadalwindow").click(function(event){event.preventDefault();
        $("#overlay").fadeOut();
        $(".modalwindow").fadeOut()})
});