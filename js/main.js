/*$('.navbar-collapse a').click(function(e) {
    e.preventDefault;
    $('.navbar-collapse a').removeClass('current');
    $(this).addClass('teste');
    return false;
})/

/
if ($('.section-nav')[0]) {
        var sections = $('.page-section');
        sections.not($('.current')).each(function () {
            $(this).hide();
            $(this).find('hr:first').hide();
            $('.section-nav a:first').addClass('active');
        });

        $('.section-nav a').click(function (e) {
            e.preventDefault;
            $('.section-nav a').removeClass('active');
            $(this).addClass('active');
            $('.page-section.current').hide().removeClass('current');
            var link = $(this).attr('href');
            $(link).fadeIn().addClass('current');
            return false;
        });
    }
/

$('.submenu a').click(function(e) {
    e.preventDefault;
    $('.submenu a').removeClass('active');
    $(this).addClass('active');
    return false;
})
*/
