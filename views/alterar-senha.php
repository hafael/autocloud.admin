<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Meus dados</h1>
      <p class="lead"></p>
      <div class="row-fluid">
        <form id="meus-dados" class="form-horizontal" method="POST">
          <div class="span6">
            <h3>Alterar Senha</h3>
            <div class="control-group">
              <label class="control-label" for="password">Senha atual</label>
              <div class="controls">
                <input type="password" id="password" name="password" class="span8">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="nova_senha">Nova senha</label>
              <div class="controls">
                <input type="password" id="nova_senha" name="nova_senha" class="span8">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="re_nova_senha">Re-digite a nova senha</label>
              <div class="controls">
                <input type="password" id="re_nova_senha" name="re_nova_senha" class="span8">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large">Salvar</button>
              </div>
              
            </div>

          </div>
          
        </form>
      </div>
      
      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>


  </body>
</html>

