$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {        
        e.preventDefault();
        var target = $(this).attr("href");	
        
        if(target.indexOf('#') >= 0){
            $target = $(target);
            
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 1000, 'swing', function () {		
                window.location.hash = target;
            }); 
            $('#navbar').removeClass('in');    
        }else{
            window.location.href = target;
        }
    });
});

function openModal(title,body){
	$("#myModal .modal-title").html(title);
	$("#myModal .modal-body").html(body);
	$("#myModal").modal();
}

function mudaOpcaoFaleConosco(corBG){
    $('.pg-fale-conosco').css('background',corBG); $('#opcao1').removeClass('hide'); $('#opcao1').hide();$('#opcao1').fadeIn();
    (corBG != '#5884a7') ? $('.opcaoInfoImprensa').removeClass('hide') : $('.opcaoInfoImprensa').addClass('hide');
}