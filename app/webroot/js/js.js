$(document).ready(function(){
    $('#categorytree > li > a').on('click', function(){
        $(this).parent().find('ul').fadeToggle(200);
        return false;
    });
    $('#formsearch #ProductSearch').on('focus', function() {
        $(this).closest('#formsearch').css({'border-color' : '#298cd9', 'box-shadow' : '0 0 10px #298cd9'});
    }).on('blur', function(){
            $(this).closest('#formsearch').css({'border-color' : '#d4d4d4', 'box-shadow' : 'inset 0px 4px 3px -2px rgba(0,0,0,0.2)'});
        });
});
