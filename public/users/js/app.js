$(function() {
    // var bg = $('.wrapper');
    // bg.fadeOut(100, function() {
    //     bg.css({'background-image': 'url(./assets/img/bg-desktop.jpg)'});
    //     bg.fadeIn(100);
    // })

    const body =
     $('body');
    var status = 1;
    $('.menu-burger').click(function() {
        body.toggleClass('nav-responsive');
        if (status == 1) { 
            body.css("overflowY", "hidden"); 
            status = 0;
        } else {
            body.css("overflowY", "scroll"); 
            console.log(0);
            status = 1;
        }
    });

    
    console.log($(".tab-pane").height());

});
