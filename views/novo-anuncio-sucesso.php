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
        
        
        <div class="span12">
          <p class="lead">Concluído! Você terminou de criar o seu anúncio e já pode <a href="<?=base_url()?>admin/meusanuncios/anuncio/<?=$this->anuncio->id?>">visualiza-lo</a>.</p>
          <h3><?=$this->anuncio->Titulo?></h3>
          <p><?=$this->anuncio->Descricao?></p>
          
          <div class="span12">

            <?php
            if($array_imagens){
              ?>
              <h4>Fotos</h4>
              <?php
              foreach ($array_imagens as $row) {
            ?>
              <div class="span2 foto">
                <div class="img-polaroid">
                  <img src="<?=base_url()?>uploads/thumb_<?=$row->ImageSRC?>" >
                </div>
              </div>
            <?php
              }
            }
            ?>
          </div>
          
          

          <a class="btn btn-primary" href="<?=base_url()?>admin/meusanuncios/anuncio/<?=$this->anuncio->id?>">Ver anúncio</a>
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
      .foto{
        height: 210px;
        margin-bottom: 40px;
        position: relative;
      }
      .foto .img-polaroid{
        text-align: center;
        min-height: 150px;
      }
      .foto .img-polaroid img{
        max-width: 150px;
        max-height: 150px;
      }
      .foto .btn-group{
        position: absolute;
        bottom: 0;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
        //$('input[type=file]').bootstrapFileInput();
      });
      
    </script>


  </body>
</html>

