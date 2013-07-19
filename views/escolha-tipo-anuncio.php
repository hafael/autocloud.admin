<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Criar novo anúncio</h1>
      <p class="lead">Qual tipo de veículo deseja anunciar?</p>
      <div class="row-fluid">
        <div class="span3">
          <h3>Carro</h3>
          <img src="<?=base_url()?>uploads/img_140x140.png" class="img-polaroid">
          <p><a class="btn btn-primary btn-large" href="novo-anuncio-carro">Anunciar</a></p>
        </div>
        <div class="span3">
          <h3>Moto</h3>
          <img src="<?=base_url()?>uploads/img_140x140.png" class="img-polaroid">
          <p><a class="btn btn-primary btn-large" href="novo-anuncio-carro">Anunciar</a></p>
        </div>
        <div class="span3">
          <h3>Caminhão</h3>
          <img src="<?=base_url()?>uploads/img_140x140.png" class="img-polaroid">
          <p><a class="btn btn-primary btn-large" href="novo-anuncio-carro">Anunciar</a></p>
        </div>
        <div class="span3">
          <h3>Barco/Lancha</h3>
          <img src="<?=base_url()?>uploads/img_140x140.png" class="img-polaroid">
          <p><a class="btn btn-primary btn-large" href="novo-anuncio-carro">Anunciar</a></p>
        </div>
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
    


  </body>
</html>

