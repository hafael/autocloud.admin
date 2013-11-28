<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Criar anúncio</h1>
      
      <div class="row-fluid">
        <form action="<?=base_url()?>novoanuncio/do_upload/<?=$this->anuncio->id?>" id="fotos" method="post" accept-charset="utf-8" enctype="multipart/form-data">
          
          <h3>Agora insira as fotos</h3>
          <p class="lead">Você pode inserir até 6 fotos</p>
          <div class="row-fuid clearfix fotos">
            <div class="span2">
              <h5>Frente</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
            <div class="span2">
              <h5>Traseira</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
            <div class="span2">
              <h5>Lateral</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
            <div class="span2">
              <h5>Interior</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
            <div class="span2">
              <h5>Extra</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
            <div class="span2">
              <h5>Extra</h5>
              <img src="<?=base_url().APPPATH?>views/img/img_140x140.png" class="img-polaroid" width="160">
              <input type="file" name="userfile[]" value="" multiple="1" title="Selecionar..." class="btn-block clearfix btn-primary">
            </div>
          </div>

          <div class="control-group well clearfix">
            <div class="controls">
              <button type="submit" class="btn btn-primary btn-large pull-right">Enviar</button>
              <a href="<?=base_url()?>novoanuncio/sucesso/<?=$this->anuncio->id?>" class="btn btn-large pull-right">Pular essa etapa</a>
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
      form#fotos .btn-group{
        display: block;
        margin:10px auto;
      }
    </style>


  </body>
</html>

