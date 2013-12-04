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
            <p class="lead">Informe seu e-mail de cadastro</p>
            <div class="control-group visible">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span10">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large">Recuperar &raquo;</button>
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

