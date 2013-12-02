<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Meus Anúncios</h1>
      
      <div class="row-fluid">
        <?php
        if($array_anuncios){
        ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titulo</th>
              <th>Valor</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            foreach ($array_anuncios as $row) {
            ?>
            <tr>
              <td><?=$row->id?></td>
              <td><?=$row->Titulo?></td>
              <td>R$ <?=$this->moedas->eua2bra($row->ValorVenda)?></td>
              <?php 
              if($row->Status){
              ?>
                <td><span class="label label-info">Ativo</span></td>
              <?php 
              }else{
              ?>
                <td><span class="label label-important">Inativo</span></td>
              <?php 
              }
              ?>
              <td><a href="meusanuncios/anuncio/<?=$row->id?>">Gerenciar</a></td>
            </tr>
            <?php
            }
            
            ?>
          </tbody>
        </table>
        <?php
        }else{
        ?>
          <h3>Você ainda nao tem nenhum anuncio cadastrado</h3>
          <p>Comece a <a href="<?=base_url()?>novo-anuncio/">criar seus anúncios</a>.</p>
        <?php
        }// fecha if array_anuncios
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

