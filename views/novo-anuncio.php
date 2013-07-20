<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Criar novo anúncio</h1>
      <p class="lead">Comece informando o veículo</p>
      <div class="row-fluid">
        <?php 


        switch ($TipoVeiculo) {
          case 1:
            include 'anuncio/carro/novo.php';
            break;
          case 2:
            echo "moto";
            break;
          case 3:
            echo "caminhao";
            break;
        }

        ?>
      </div>
      
      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <style type="text/css">
      form#fotos > div > div{
        margin-bottom: 20px;
      }
      form#fotos .btn-group{
        display: block;
        margin:10px auto;
      }
    </style>
    <script type="text/javascript">
      $("#valor_venda").maskMoney({thousands:'.', decimal:','});




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
        url: 'http://localhost/autocloud/webservice/carros/montadoras',
        success: function (data){
          $('#fabricante').html('<option></option>');
          $.each(data, function(i, fabricante){
            $('#fabricante').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
          });
          $('#fabricante').select2({
            placeholder: "Selecione uma marca",
            allowClear: true
          });
          $('#fabricante').select2('enable', true);
        }
      });

      //Carrega Estados
      $.ajax({
        type: 'GET',
        url: 'http://localhost/autocloud/webservice/estadocidade/estados',
        success: function (data){
          $('#estado').append('<option disabled></option>');
          $.each(data, function(i, fabricante){
            $('#estado').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
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
        url: 'http://localhost/autocloud/webservice/estadocidade/estados',
        success: function (data){
          $('#cidade').append('<option disabled></option>');
          $.each(data, function(i, fabricante){
            $('#cidade').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
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
        $('#modelo').empty();
        $('#modelo').append('<option value="false">Aguarde</option>');
        $.ajax({
          type: 'GET',
          url: 'http://localhost/autocloud/webservice/carros/modelos/'+fabricante_id,
          success: function (data){
            $('#modelo').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#modelo').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
            });
            $('#modelo').select2({
              placeholder: "Selecione um modelo",
              allowClear: true
            });
            $('#modelo').select2('enable', true);
            $('#fabricante option:selected').each(function () {
              $('#fabricanteText').val($(this).text());
            });
          }
        });
      });
      $('#modelo').change(function(){
        var fabricante_id = $(this).val();
        $('#anoFab').empty();
        $('#anoFab').append('<option value="false">Aguarde</option>');
        $.ajax({
          type: 'GET',
          url: 'http://localhost/autocloud/webservice/carros/anofabricacao/'+fabricante_id,
          success: function (data){
            $('#anoFab').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#anoFab').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
            });
            $('#anoFab').select2({
              placeholder: "Selecione um modelo",
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
          url: 'http://localhost/autocloud/webservice/carros/anomodelo/'+fabricante_id,
          success: function (data){
            $('#anoMod').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#anoMod').append('<option value="'+modelo.id+'">'+modelo.Ano+'</option>');
            });
            $('#anoMod').select2({
              placeholder: "Selecione um modelo",
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
          url: 'http://localhost/autocloud/webservice/carros/versao/'+fabricante_id,
          success: function (data){
            $('#versao').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#versao').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
            });
            $('#versao').select2({
              placeholder: "Selecione um modelo",
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
      $('#estado').change(function(){
        var fabricante_id = $(this).val();
        $('#cidade').empty();
        $('#cidade').append('<option value="false">Aguarde</option>');
        $.ajax({
          type: 'GET',
          url: 'http://localhost/autocloud/webservice/estadocidade/cidades/'+fabricante_id,
          success: function (data){
            $('#cidade').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#cidade').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
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
        placeholder: "Selecione um modelo",
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
      $("#versao").select2({
        placeholder: "Versão do veículo",
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
    </script>


  </body>
</html>

