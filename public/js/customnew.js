$( document ).ready(function() {

     cCheckbox('.filter');	
     //cSelect('.field');
     //cRadio('.field');
    $('.filter li').on('click',function(){
        $(this).find('input[type=checkbox]').trigger('click');
    });

    $( ".tabc a" ).on( "click", function() {
      var tabc =  $(this).data('tabc');
      $('.tabc a').removeClass('active');
      $(this).addClass('active');

      $('.tab-contentac-2').hide();
      $('.'+tabc).show();
    });

    var ht = $(window).height() - 94;
    $('.full-ht').height(ht);

    $('.data-tble').DataTable( {
        paging: true,
        searching: false,
        ordering:  false
    });

    $( ".dashboard-lft-nav .nav li" ).on( "click", function(e) {
        $('.dashboard-lft-nav .nav li').removeClass('active');
        $('.dashboard-lft-nav .nav li .dr').removeClass('fa-angle-down');
        $(this).addClass('active');
        $(this).find('.dr').addClass('fa-angle-down');
        $('.dashboard-lft-nav .nav li .sub-menu').slideUp();
        $(this).find('.sub-menu').slideToggle();
    });


    //var infoc = $('.dataTables_info');
    //var infop = $('.dataTables_paginate');
    $('.dataTables_length').remove();

    //$('.table-info-area').append(infoc);
    //$('.table-info-area').append(infop);




});

$( window ).resize(function() {
  var ht = $(window).height() - 94;
    $('.full-ht').height(ht);
});

/*(function($){

    $(window).on("load",function(){

        $(".full-ht").mCustomScrollbar({
            theme:"minimal"
        });

        $(".c-scroll").mCustomScrollbar({
            theme:"minimal",
            autoHideScrollbar: false
        });



    });

})(jQuery);*/

function cCheckbox(tgt){
    $(tgt+' input[type=checkbox]').each(function(){
        if(!$(this).parent().hasClass('cCheckbox')){
                $(this).fadeTo(0,0).wrap('<div class="cCheckbox" style="position:relative;" />');
                $(this).css({'position':'absolute','width':'100%','height':'100%','left':'0','top':'0','z-index':'10'});
                if($(this).is(':checked')){$(this).parent().addClass('checked');}
                $(this).on('change',function(){
                if($(this).is(':checked')){
                    $(this).parent().addClass('checked');
                } else {
                    $(this).parent().removeClass('checked');
                }
            });
        }
    });
}

function cRadio(tgt) {
    $(tgt + ' input:radio').each(function(e) {
        if (!$(this).parent().hasClass('cRadio')) {
            $(this).fadeTo(0, 0).wrap('<span class="cRadio" style="position:relative;" />');
            $(this).css({
                'position': 'absolute',
                'width': '100%',
                'height': '100%',
                'left': '0',
                'top': '0',
                'z-index': '10'
            });
            if ($(this).is(':checked')) {
                $(this).parent().addClass('checked');
            }
            $(this).on('change', function() {
                var nam = $(this).attr('name');
                if ($(this).is(':checked')) {
                    $('input:radio[name="' + nam + '"]').parent(".cRadio").removeClass('checked');
                    $(this).parent().addClass('checked');
                }
            });
            $(this).parent().next('label').on('click', function() {
                $(this).prev().find('input:radio').trigger('click');
            });
        }
    });
}

function cSelect(tgt) {
    $(tgt + ' select').each(function() {
        var $this = $(this),
            val = $this.children('option:first-child').text();
        if (!$this.parent().hasClass('cSelect')) {
            $this.wrap('<div class="cSelect" style="position:relative;" />');
            $this.parent().append('<p>' + val + '</p>');
            $this.css({
                'position': 'absolute',
                'top': '0px',
                'left': '0px',
                'width': '100%',
                'height': '100%',
                'z-index': '10',
                'opacity': 0
            });
            $this.on('change', function() {
                val = $(this).val();
                $(this).parent().children('p').text(val);
                $(this).blur();
            });
            $(this).focus(function() {
                $(this).parent().addClass('drop');
            }).blur(function() {
                $(this).parent().removeClass('drop');
            });
        }
    });
}
