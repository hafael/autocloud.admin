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
        <form id="novo-anuncio" class="form-horizontal" method="POST">
          <div class="span6">
            <h3>Selecione o veículo</h3>
            <div class="control-group">
              <label class="control-label" for="fabricante">Marca</label>
              <div class="controls">
                <select id="fabricante" name="fabricante" disabled>
                  <option>Aguarde</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="modelo">Modelo</label>
              <div class="controls">
                <select id="modelo" name="modelo" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="anoFab">Ano de fabricação</label>
              <div class="controls">
                <select id="anoFab" name="anoFab" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="anoMod">Ano do modelo</label>
              <div class="controls">
                <select id="anoMod" name="anoMod" disabled>
                  <option></option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="versao">Versão</label>
              <div class="controls">
                <select id="versao" name="versao" disabled>
                  <option></option>
                </select>
              </div>
            </div>
          </div>
          <div class="span6 pull-right">
            <h3>Dados adicionais</h3>
            <div class="control-group">
              <label class="checkbox inline">
                <input type="checkbox" id="ar_condicionado" name="ar_condicionado" value="1">
                Ar
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="vidro_eletrico" name="vidro_eletrico" value="1">
                Vidro
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="direcao_hidraulica" name="direcao_hidraulica" value="1">
                Direção
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="air_bag" name="air_bag" value="1">
                Air bag
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="gas_natural" name="gas_natural" value="1">
                GNV
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="blindado" name="blindado" value="1">
                Blindado
              </label>
            </div>
            <div class="control-group">
              <label class="control-label">Combustível</label>
              <div class="controls">
                <label class="radio">
                  <input type="radio" name="combustivel" id="combustivel" value="Flex" checked>
                  Flex
                </label>
                <label class="radio">
                  <input type="radio" name="combustivel" id="combustivel" value="Gasolina">
                  Gasolina
                </label>
                <label class="radio">
                  <input type="radio" name="combustivel" id="combustivel" value="Álcool">
                  Álcool
                </label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="valor_venda">Valor de venda</label>
              <div class="controls">
                <div class="input-prepend input-append">
                  <span class="add-on">R$</span>
                  <input class="span5" id="valor_venda" name="valor_venda" type="text">
                  <span class="add-on">,00</span>
                </div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="tel_contato">Telefone para contato</label>
              <div class="controls">
                <input type="text" class="disabled" id="tel_contato" name="tel_contato" value="(21) 8083-6612" >
                <div class="help"><a href="#">Usar outro número</a></div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="hidden" id="fabricanteText" name="fabricanteText" value="" alt="Montadora">
                <input type="hidden" id="modeloText" name="modeloText" value="" alt="Modelo">
                <input type="hidden" id="AnoFabText" name="AnoFabText" value="" alt="Ano Fabricação">
                <input type="hidden" id="AnoModText" name="AnoModText" value="" alt="Ano Modelo">
                <input type="hidden" id="versaoText" name="versaoText" value="" alt="Versão">
                <input type="hidden" id="TipoAnuncio" name="TipoAnuncio" value="1" alt="Gratuito">
                <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="1" alt="carro">
                <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir</button>
              </div>
            </div>
          </div>
          
        </form>
        <form class="form-horizontal" id="fotos" method="post" action="some_action" enctype="multipart/form-data" />
          <div class="span12">
            <h3>Fotos</h3>
            <div class="span3">
              <h5>Frente</h5>
              <img src="<?=APPPATH?>views/img/img_300x200.png" class="img-polaroid">
              <div class="btn-group">
                <button class="btn">Visualizar</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-edit"></i> Alterar</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-trash"></i> Excluir</a></li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <h5>Traseira</h5>
              <img src="<?=APPPATH?>views/img/img_300x200.png" class="img-polaroid">
              <div class="btn-group">
                <button class="btn">Visualizar</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-edit"></i> Alterar</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-trash"></i> Excluir</a></li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <h5>Lateral</h5>
              <img src="<?=APPPATH?>views/img/img_300x200.png" class="img-polaroid">
              <div class="btn-group">
                <button class="btn">Visualizar</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-edit"></i> Alterar</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-trash"></i> Excluir</a></li>
                </ul>
              </div>
            </div>
            <div class="span3">
              <h5>Interior</h5>
              <img src="<?=APPPATH?>views/img/img_300x200.png" class="img-polaroid">
              <div class="btn-group">
                <button class="btn">Visualizar</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="icon-edit"></i> Alterar</a></li>
                  <li class="divider"></li>
                  <li><a href="#"><i class="icon-trash"></i> Excluir</a></li>
                </ul>
              </div>
            </div>
            
          </div>
        </form>
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
      $("#fabricante").select2({
        placeholder: "Aguarde",
        allowClear: true
      });
      //Carrega Fabricantes
      $.ajax({
        type: 'GET',
        url: 'novoanunciocarro/get_fabricantes/',
        success: function (data){
          $('#fabricante').html('<option></option>');
          $.each(data, function(i, fabricante){
            $('#fabricante').append('<option value="'+fabricante.id+'">'+fabricante.Nome+'</option>');
          });
          $('#fabricante').select2({
            placeholder: "Selecine uma marca",
            allowClear: true
          });
          $('#fabricante').select2('enable', true);
        }
      });


      $('#fabricante').change(function(){
        var fabricante_id = $(this).val();
        $('#modelo').empty();
        $('#modelo').append('<option value="false">Aguarde</option>');
        $.ajax({
          type: 'GET',
          url: 'novoanunciocarro/get_modelos/'+fabricante_id,
          success: function (data){
            $('#modelo').html('<option></option>');
            $.each(data, function(i, modelo){
              $('#modelo').append('<option value="'+modelo.id+'">'+modelo.Nome+'</option>');
            });
            $('#modelo').select2({
              placeholder: "Selecine um modelo",
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
          url: 'novoanunciocarro/get_ano_fab/'+fabricante_id,
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
          url: 'novoanunciocarro/get_ano_mod/'+fabricante_id,
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
          url: 'novoanunciocarro/get_versao/'+fabricante_id,
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
    </script>


  </body>
</html>

