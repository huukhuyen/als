$(document).ready(function() {
    // Menu responsive
    $('.toggle-menu').click(function() {
        $('.content-nav').slideToggle(400);
    });

    // language
    $('.language .sub').hide()
    $('.language li i.fa').click(function(event) {
        $('.sub').slideToggle('100');
    });

    // Menu accordion
    $('.nd-li').hide();
    $('.item-accordion h2').click(function(event) {
        $('.fa-minus').attr("class", "fa fa-plus right");
        $('.nd-li').slideUp();
        $('.nd-li').slideUp().removeClass('active');
        var a = $('.fa-plus');
        $(this).parent().find('.nd-li').slideDown();
        $(this).parent().find(a).attr("class", "fa fa-minus right");
    });

    // Back to Top
    function scrolltop() {
        var id_button = '#toTop';
        var offset = 220;
        var duration = 500;
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $(id_button).fadeIn(duration);
            } else {
                $(id_button).fadeOut(duration);
            }
        });
        $(id_button).click(function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, duration);
            return false;
        });
    }
    scrolltop();
});


// Upload file
document.getElementById("FileAttachment").onchange = function() {
    document.getElementById("fileuploadurl").value = this.value;
};
