<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container escolha-anuncio">
      <h1>Criar novo anúncio</h1>
      <p class="lead">Qual tipo de veículo deseja anunciar?</p>
      <div class="row-fluid tipo-veiculo">
        <div class="span3 veiculo carro">
          <h3>Carro</h3>
          <img src="<?=base_url().APPPATH?>views/img/carsale.jpg">
          <a class="btn btn-primary btn-large btn-block" href="novo-anuncio-carro">Anunciar</a>
        </div>
        <div class="span3 veiculo moto">
          <h3>Moto</h3>
          <img src="<?=base_url().APPPATH?>views/img/bikesale.jpg">
          <a class="btn btn-primary btn-large btn-block" href="novo-anuncio-moto">Anunciar</a>
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

