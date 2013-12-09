<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/head.php') ?>
  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container esqueci-senha">
      <h1 class="title">Recuperar senha</h1>
      <div class="row-fluid">
        <div class="span6 login">
          <form id="recuperar-senha" class="form-horizontal" method="POST">
            <p class="lead">Foi enviado um e-mail para <strong><?=$this->input->get('email')?></strong> com um token de acesso. Insira-o para recuperar a senha.</p>
            <div class="control-group ">
              <label class="control-label" for="token">Token</label>
              <div class="controls">
                <input type="text" id="token" name="token" class="span4">
                
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label" for="senha">Nova senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span6">
              </div>
            </div>
            <div class="control-group ">
              <label class="control-label" for="resenha">Re-digite a senha</label>
              <div class="controls">
                <input type="password" id="resenha" name="resenha" class="span6">
              </div>
            </div>
            <div class="control-group ">
              
              <div class="controls">
                <button type="submit" class="btn btn-primary">Salvar &raquo;</button>
              </div>
            </div>
            
          </form>
        </div>

          
      </div><!--/row-->

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script src="<?=base_url().APPPATH?>views/js/scripts-cadastro.js"></script>

  </body>
</html>

