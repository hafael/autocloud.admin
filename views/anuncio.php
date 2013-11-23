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
                    <img src="http://s3-sa-east-1.amazonaws.com/autocloud.images/thumb_<?=$row->ImageSRC?>" >
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
    
  </body>
</html>

