<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/head.php') ?>
  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Anuncie no Autocloud</h1>
      <p class="lead">Escolha um de nossos planos para continuar</p>
      <div class="row-fluid">
          <form id="login" class="form-horizontal span8" method="POST">
            <legend>Login</legend>
            <p class="lead">Faça o login para prosseguir</p>
            <div class="control-group visible">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span10" placeholder="Seu e-mail" value="<?=$this->input->get('email')?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="senha">Senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span6" placeholder="Sua senha">
                <div class="help-inline"><label for="mostrar-digitos"><input type="checkbox" id="mostrar-digitos"> Mostrar dígitos</label></div>
                <div class="help"><a href="#">Esqueci minha senha</a></div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large">Prosseguir &raquo;</button>
              </div>
            </div>
            
          </form>
      </div><!--/row-->

      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>

  </body>
</html>

