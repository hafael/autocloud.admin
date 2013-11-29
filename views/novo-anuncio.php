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
            include 'anuncio/moto/novo.php';
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
  </body>
</html>

