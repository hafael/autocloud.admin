<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Meus anúncios</h1>
      <p class="lead">Gerenciar anúncio
      <?php 
      if($this->anuncio->Status){
      ?>
        <span class="label label-info">Ativo</span>
      <?php 
      }else{
      ?>
        <span class="label label-important">Inativo</span>
      <?php 
      }
      ?>
      </p>

      
      <div class="row-fluid">
        <?php 


        switch ($this->anuncio->TipoVeiculo) {
          case 1:
            include 'anuncio/carro/gerenciar.php';
            break;
          case 2:
            include 'anuncio/moto/gerenciar.php';
            break;
        }

        ?>
      </div>
      <hr>
      <div class="row-fluid">
        
        
        <form action="<?=base_url()?>admin/meusanuncios/do_upload/<?=$this->anuncio->id?>" id="fotos" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          
          <h3>Fotos</h3>
          <div class="row-fuid clearfix fotos">
            <?php
            if($array_imagens){
              $i=1;
              foreach ($array_imagens as $row) {
              ?>
                <div class="span2 foto">
                  <h5>Foto <?=$i?></h5>
                  <div class="img-polaroid">
                    <img src="<?=base_url()?>uploads/thumb_<?=$row->ImageSRC?>" >
                  </div>
                  <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
                </div>
              <?php
              $i++;
              }
              if($i < 6){
                while( $i <= 6 ){
                  ?>
                  <div class="span2 foto">
                    <h5>Foto <?=$i?></h5>
                    <div class="img-polaroid">
                      <img src="<?=base_url()?>uploads/img_140x140.png" >
                    </div>
                    <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
                  </div>
                  <?php
                  $i++;
                }
              }
            }else{
              $i=1;
              while( $i <= 6 ){

                ?>
                <div class="span2 foto">
                  <h5>Foto <?=$i?></h5>
                  <div class="img-polaroid">
                    <img src="<?=base_url()?>uploads/img_140x140.png" >
                  </div>
                  <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
                </div>
                <?php
                $i++;
              }
            }
            ?>
            
            
            
          </div>

          <div class="control-group well clearfix">
            <div class="controls">
              <button type="submit" class="btn btn-primary btn-large pull-right">Enviar fotos</button>
            </div>
          </div>
          
        </form>

      </div>
      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <style type="text/css">
      .fotos > div,
      .fotos > div .img-polaroid{
        margin-bottom: 20px;
      }
      .fotos > div .img-polaroid{
        min-height: 160px;
        max-width: 160px;
      }
      .fotos .foto img{
        width: 100%;
        max-height: 160px;
        max-width: 160px;
      }
      .fotos .foto .file-input-name{
        width: 100%;
        display: block;
        overflow: hidden;
        margin-left: 0;
        text-align: center;
      }
      .controls .btn-group.pull-right{
        margin-left: 20px;
      }
    </style>
    <script type="text/javascript">

      var endpoint = 'http://www.autocloud.com.br/webservice/';
      //var endpoint = 'http://localhost/autocloud/webservice/';

      var tipo_veiculo = $('#TipoVeiculo').val();

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
        url: endpoint+'carros/montadoras/'+tipo_veiculo,
        success: function (data){
          $('#fabricante').append('<option disabled></option>');
          $.each(data, function(i, fabricante){
            $('#fabricante').append('<option value="'+fabricante.Chave+'">'+fabricante.Nome+'</option>');
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
        url: endpoint+'estadocidade/estados',
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
        url: endpoint+'estadocidade/estados',
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
        $('#modelo').html('<option value="false">Aguarde</option>');
        $.ajax({
          type: 'GET',
          url: endpoint+'carros/modelos/'+tipo_veiculo+'/'+fabricante_id,
          success: function (data){
            $('#modelo').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#modelo').append('<option value="'+modelo.Chave+'">'+modelo.Nome+'</option>');
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
        $('#anoMod').append('<option value="'+ano_fab+'">'+ano_fab+'</option>');
        $('#anoMod').append('<option value="'+ano_mod+'">'+ano_mod+'</option>');
        $("#anoMod").select2({
          placeholder: "Ano do modelo",
          allowClear: true
        });
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
        $.ajax({
          type: 'GET',
          url: endpoint+'estadocidade/cidades/'+fabricante_id,
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

