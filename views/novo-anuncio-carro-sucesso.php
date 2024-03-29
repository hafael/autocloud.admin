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
          <p class="lead">Concluído! Você terminou de criar o seu anúncio e já pode <a href="#">visualiza-lo</a>.</p>
          <h3><?=$this->anuncio_carro->Montadora?> <?=$this->anuncio_carro->Modelo?> <?=$this->anuncio_carro->Versao?> <?=$this->anuncio_carro->Combustivel?> <?=$this->anuncio_carro->AnoFab?> / <?=$this->anuncio_carro->AnoMod?></h3>
          <p><?=$this->anuncio->Descricao?></p>
          <h4>Fotos</h4>
          <div class="span12">

            <?php
            foreach ($array_imagens as $row) {
            ?>
              <div class="span2 foto">
                <div class="img-polaroid">
                  <img src="http://localhost/autocloud/uploads/thumb_<?=$row->ImageSRC?>" >
                </div>
                <!--
                <p><?=$row->id?> - <?=$row->IndexList?></p>
                
                <div class="btn-group">
                  <button class="btn">Visualizar</button>
                  <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#"><i class="icon-edit"></i> Alterar</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-trash"></i> Excluir</a></li>
                  </ul>
                </div>
                -->
              </div>

            <?php
            }
            ?>
          </div>
          
          

          <a class="btn btn-primary" href="">Ver anúncio</a>
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

