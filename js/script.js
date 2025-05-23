$(function(){
    $('.botao-menu-mobile').click(function(e){
        e.preventDefault();
        var listaMenu = $('nav.mobile ul');
        var icone = $(this).find('i');

        if(listaMenu.is(':hidden')){
            icone.removeClass('fa-bars').addClass('fa-times');
        } else {
            icone.removeClass('fa-times').addClass('fa-bars');
        }

        listaMenu.slideToggle();
    });

    // Correção: buscar elementos com atributo target
    if ($('[target]').length > 0) {
        var elemento = '#' + $('[target]').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html, body').animate({
            scrollTop: divScroll
        }, 1000);
    }

    // Função de carregamento dinâmico
    // function carregamentoDinamico() {
    //     $('[realtime]').click(function(e){
    //         e.preventDefault();
    //         console.log('Carregando página...');
    //         var pagina = $(this).attr('realtime');
    //         console.log(pagina);
    //         $('.container-principal').load('4 - DANKI-CODE/pages/' + pagina + '.php');
    //     });
    // }

    // // Chamada da função carregamento
    // carregamentoDinamico();
});
