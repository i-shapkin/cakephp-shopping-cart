$(document).ready(function(){
    $('#categorytree > li > a').on('click', function(){
        var thisUl = $(this).parent().find('ul');
        thisUl.toggleClass('active');
        thisUl.slideToggle(200, function(){
            if(thisUl.hasClass('active')) {
                thisUl.parent().find('.close-open').addClass('open');
            } else {
                thisUl.parent().find('.close-open').removeClass('open');
            }
        });
        return false;
    });
    $('#formsearch #ProductSearch').on('focus', function() {
        $(this).closest('#formsearch').css({'border-color' : '#298cd9', 'box-shadow' : '0 0 10px #298cd9'});
        $(this).closest('#formsearch').find('.search-icon').hide();
    }).on('blur', function(){
            $(this).closest('#formsearch').css({'border-color' : '#d4d4d4', 'box-shadow' : 'inset 0px 4px 3px -2px rgba(0,0,0,0.2)'});
            if($(this).closest('#formsearch').find('input').val() == '') {
                $(this).closest('#formsearch').find('.search-icon').show();
            }
        });
});
