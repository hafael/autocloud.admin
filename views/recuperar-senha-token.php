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
          <form id="login" class="form-horizontal" method="POST">
            <p class="lead">Foi enviado um e-mail para <strong>#email#</strong> com um token de acesso. Insira-o para recuperar a senha.</p>
            <div class="control-group visible">
              <label class="control-label" for="token">Token</label>
              <div class="controls">
                <input type="text" id="token" name="token" class="span4">
                <button type="submit" class="btn btn-primary">Autorizar &raquo;</button>
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

