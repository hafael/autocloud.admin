var endpoint ;
if (location.host=='localhost') {
  endpoint = location.protocol+'//'+location.host+'/autocloud/api/';
}else{
  endpoint = 'http://api.autocloud.com.br/';
}

var tipo_veiculo = $('#TipoVeiculo').val();
var fabricante_id = $('#fabricante').val();
var id_estado = $('#estado').val();

$(document).ready(function(){
  $('input[type=file]').bootstrapFileInput();
  $("#valor_venda").maskMoney({thousands:'.', decimal:','});
});
$("#fabricante").select2({
  placeholder: "Aguarde",
  allowClear: true
});
$("#estado").select2({
  placeholder: "Aguarde",
  allowClear: true
});
//Carrega Fabricantes
$.ajax({
  type: 'GET',
  crossDomain: true,
  dataType: 'jsonp',
  url: endpoint+'vehicles/brands/type/'+tipo_veiculo,
  success: function (data){
    $('#fabricante').parents('.control-group').removeClass('loading');
    $.each(data.brands, function(i, brand){
      $('#fabricante').append('<option value="'+brand.id+'">'+brand.name+'</option>');
    });
    $('#fabricante').select2({
      placeholder: "Selecine uma marca",
      allowClear: true
    });
    $('#fabricante').select2('enable', true);
  }
});

//Carrega Estados
$.ajax({
  type: 'GET',
  crossDomain: true,
  dataType: 'jsonp',
  url: endpoint+'places/states',
  success: function (data){
    $('#estado').append('<option disabled></option>');
    $('#estado').parents('.control-group').removeClass('loading');
    $.each(data.states, function(i, state){
      $('#estado').append('<option value="'+state.id+'">'+state.name+'</option>');
    });
    $('#estado').select2({
      placeholder: "Selecione o estado",
      allowClear: true
    });
    $('#estado').select2('enable', true);
  }
});
//Carrega Cidades
$.ajax({
  type: 'GET',
  crossDomain: true,
  dataType: 'jsonp',
  url: endpoint+'places/cities/id/'+id_estado,
  success: function (data){
    $('#cidade').append('<option disabled></option>');
    $('#cidade').parents('.control-group').removeClass('loading');
    $.each(data.cities, function(i, city){
      $('#cidade').append('<option value="'+city.id+'">'+city.name+'</option>');
    });
    $('#cidade').select2({
      placeholder: "Selecione a cidade",
      allowClear: true
    });
    $('#cidade').select2('enable', true);
  }
});


$('#fabricante').change(function(){
  var fabricante_id = $(this).val();
  $('#modelo').html('<option value="false">Aguarde</option>');
  $('#modelo').parents('.control-group').addClass('loading');
  $.ajax({
    type: 'GET',
    crossDomain: true,
    dataType: 'jsonp',
    url: endpoint+'vehicles/models/id/'+fabricante_id+'/type/'+tipo_veiculo,
    success: function (data){
      $('#modelo').html('<option></option>');
      $('#modelo').parents('.control-group').removeClass('loading');
      $.each(data.models, function(i, model){
        $('#modelo').append('<option value="'+model.id+'">'+model.name+'</option>');
      });
      $('#modelo').select2({
        placeholder: "Selecine um modelo",
        allowClear: true
      });
      $('#modelo').select2('enable', true);
      $('#fabricante option:selected').each(function () {
        $('#fabricanteText').val($(this).text());
      });
      //$('#modelo, #anoFab, #anoMod, #versao').html('<option></option>').select2();
    }
  });
});
/*
$('#modelo').change(function(){
  var fabricante_id = $(this).val();
  $('#anoFab').empty();
  $('#anoFab').append('<option value="false">Aguarde</option>');
  $.ajax({
    type: 'GET',
    url: endpoint+'carros/anofabricacao/'+fabricante_id,
    success: function (data){
      $('#anoFab').html('<option></option>');
      $.each(data, function(i, modelo){
        $('#anoFab').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
      });
      $('#anoFab').select2({
        placeholder: "Selecine um modelo",
        allowClear: true
      });
      $('#anoFab').select2('enable', true);
      $('#modelo option:selected').each(function () {
        $('#modeloText').val($(this).text());
      });
    }
  });
});
$('#anoFab').change(function(){
  var fabricante_id = $(this).val();
  $('#anoMod').empty();
  $('#anoMod').append('<option value="false">Aguarde</option>');
  $.ajax({
    type: 'GET',
    url: endpoint+'carros/anomodelo/'+fabricante_id,
    success: function (data){
      $('#anoMod').html('<option></option>');
      $.each(data, function(i, modelo){
        $('#anoMod').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
      });
      $('#anoMod').select2({
        placeholder: "Selecine um modelo",
        allowClear: true
      });
      $('#anoMod').select2('enable', true);
      $('#anoFab option:selected').each(function () {
        $('#AnoFabText').val($(this).text());
      });
    }
  });
});
$('#anoMod').change(function(){
  var fabricante_id = $(this).val();
  $('#versao').empty();
  $('#versao').append('<option value="false">Aguarde</option>');
  $.ajax({
    type: 'GET',
    url: endpoint+'carros/versao/'+fabricante_id,
    success: function (data){
      $('#versao').html('<option></option>');
      $.each(data, function(i, modelo){
        $('#versao').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
      });
      $('#versao').select2({
        placeholder: "Selecine um modelo",
        allowClear: true
      });
      $('#versao').select2('enable', true);
      $('#anoMod option:selected').each(function () {
        $('#AnoModText').val($(this).text());
      });
    }
  });
});
$('#versao').change(function(){
  $('#versao option:selected').each(function () {
    $('#versaoText').val($(this).text());
  });
});
*/
$('#modelo').change(function(){
  $('#modelo option:selected').each(function () {
    $('#modeloText').val($(this).text());
  });
});
$('#anoFab').change(function(){
  
  var ano_fab = parseInt($(this).val());
  var ano_mod = ano_fab+1;
  $('#anoMod').empty();
  $('#anoMod').html('<option value="'+ano_fab+'">'+ano_fab+'</option><option value="'+ano_mod+'">'+ano_mod+'</option>');
  $("#anoMod").select2({
    placeholder: "Ano do modelo",
    allowClear: true
  });
  $('#anoMod').select2('enable', true);
  $('#anoMod option:selected').each(function () {
    $('#AnoFabText').val($(this).text());
  });
});
$('#anoMod').change(function(){
  $('#anoMod option:selected').each(function () {
    $('#AnoModText').val($(this).text());
  });
});
$('#estado').change(function(){
  var fabricante_id = $(this).val();
  $('#cidade').empty();
  $('#cidade').append('<option value="false">Aguarde</option>');
  $('#cidade').parents('.control-group').addClass('loading');
  $.ajax({
    type: 'GET',
    crossDomain: true,
    dataType: 'jsonp',
    url: endpoint+'places/cities/id/'+fabricante_id,
    success: function (data){
      $('#cidade').html('<option></option>');
      $('#cidade').parents('.control-group').removeClass('loading');
      $.each(data.cities, function(i, city){
        $('#cidade').append('<option value="'+city.id+'">'+city.name+'</option>');
      });
      $('#cidade').select2({
        placeholder: "Selecione a cidade",
        allowClear: true
      });
      $('#cidade').select2('enable', true);
      $('#estado option:selected').each(function () {
        $('#EstadoText').val($(this).text());
        $('#CidadeText').val('');
      });
    }
  });
});
$('#cidade').change(function(){
  $('#cidade option:selected').each(function () {
    $('#CidadeText').val($(this).text());
  });
});


$("#modelo").select2({
  placeholder: "Selecine um modelo",
  allowClear: true
});
$("#anoFab").select2({
  placeholder: "Ano de fabricação",
  allowClear: true
});
$("#anoMod").select2({
  placeholder: "Ano do modelo",
  allowClear: true
});
$("#estado").select2({
  placeholder: "Selecione o estado",
  allowClear: true
});
$("#cidade").select2({
  placeholder: "Selecione a cidade",
  allowClear: true
});
$("#portas, #transmissao").select2();