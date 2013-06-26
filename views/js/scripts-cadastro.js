function validaEmail(email){
	var er = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}/;
	if(er.exec(email)){
		return true;
	}else{
		return false;
	}
}
$(function() {

	/*
	$('.seleciona-planos a.btn').click(function(){

		$('.seleciona-planos').slideUp(400);
		$('.dados-cadastro').slideDown(800);

		return false;

	});
	*/
	$('.dados-cadastro a.trocar-plano').click(function(){

		$('.dados-cadastro').slideUp(400);
		$('.seleciona-planos').slideDown(800);

		return false;

	});

	$('.dados-cadastro .verifica-email a').click(function(){

		if(!$(this).hasClass('disabled')){

			$(this).html('Aguarde...');
			var email = $('.dados-cadastro #email').val();
		
			var params = {
				email : email
			}
			var endpoint = 'http://localhost/autocloud/cadastro/verificaEmail';
			$.ajax({
			  type: "GET",
			  url: endpoint,
			  dataType: 'json',
			  data: params,
			  success: function(data){
			    // we make a successful JSONP call!
			    console.log(data);
			    if(data.status==400){
			    	$('.dados-cadastro .control-group:hidden').fadeIn(400);
			    	$('.dados-cadastro .verifica-email').fadeOut();
			    	$('.dados-cadastro #cadastro #email').parents('.control-group').removeClass('error').addClass('success');
			    }else if(data.status==200){
			    	$('form#cadastro').slideUp();
			    	$('form#login').slideDown();
			    	$('form#login #loginEmail').val($('.dados-cadastro #cadastro #email').val());
			    }
			  }
			});

		}
		
		
		return false;

	});
	/*
	$('.dados-cadastro #email').focusout(function(){
		var email = $('.dados-cadastro #email').val();
		if(validaEmail(email)){
			$(this).parents('.control-group').removeClass('error').addClass('success');
			$('.dados-cadastro .verifica-email a').removeClass('disabled');
		}else{
			$(this).parents('.control-group').removeClass('success').addClass('error');
		}
	});
	*/
	$('.dados-cadastro #email').keypress(function(){
		var email = $('.dados-cadastro #email').val();
		if(validaEmail(email)){
			$(this).parents('.control-group').removeClass('error').addClass('success');
			$('.dados-cadastro .verifica-email a').removeClass('disabled');
		}
	});

	$('.dados-cadastro #nome').focusout(function(){
		if($(this).val().split(' ').length > 1){
			$('.dados-cadastro #nome').parents('.control-group').removeClass('error').addClass('success');
		}else{
			$('.dados-cadastro #nome').parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro #resenha').focusout(function(){
		if($(this).val() == $('.dados-cadastro #senha').val()){
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('error').addClass('success');
		}else{
			$('.dados-cadastro #resenha,.dados-cadastro #senha').parents('.control-group').removeClass('success').addClass('error');
		}
	});
	$('.dados-cadastro #mostrar-digitos').change(function(){
		$(this).toggleClass('on');
		if($(this).hasClass('on')){
			$('.dados-cadastro #resenha').parents('.control-group').removeClass('error').fadeOut();
			$('.dados-cadastro #senha').attr('type','text');
		}else{
			$('.dados-cadastro #resenha').parents('.control-group').fadeIn();
			$('.dados-cadastro #senha').attr('type','password');
		};
		return false;
	});


});