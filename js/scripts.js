$(function(){
    //Aqui vai todo o nosso código javascript
    $('nav.mobile').click(function(){
        //oque vai acontecer quando clicar no nav.mobile
        var listaMenu = $('nav.mobile ul');
        //abrindo o menu atraves do fadeIn
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeOut();
        }
        */

        //abrir ou fechar sem efeitos
        /*
        
       if(listaMenu.is(':hidden') == true){
            //listaMenu.show();
            listaMenu.css('display','block');
        }
        else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }
        */

        if(listaMenu.is(':hidden') == true){
            //fa fa-times
            //fa fa-align-justify
            //var icone = $('.botao-menu-mobile i');
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-alingn-justify');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-times');
            icone.addClass('fa-alingn-justify');
            listaMenu.slideToggle();
        }

    });

    if($('target').length > 0){
        //O elemento existe, portanto precisamos dar o scroll em algum elemento.
        var elemento = '#'+$('target').attr('target');

        var divScroll = $(elemento).offset().top;

        $('html,body').animate({'scrollTop':divScroll},2000);
    }

})