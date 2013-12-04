<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include_once('includes/head.php') ?>
  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container login-cadastro">
      <h1 class="title">Anuncie no Autocloud</h1>
      <div class="row-fluid">
        <div class="span6 login">
          <form id="login" class="form-horizontal" method="POST" action="<?=base_url()?>login/logar/">
            <legend>Login</legend>
            <p class="lead">Faça o login para prosseguir</p>
            <div class="control-group visible">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span10" value="<?=$this->input->get('email')?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="senha">Senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span6">
                <div class="help-inline"><a href="<?=base_url()?>login/esqueci-minha-senha/">Esqueci minha senha</a></div>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large">Logar &raquo;</button>
              </div>
            </div>
            
          </form>
        </div>
        <div class="span6 cadastro well">
          <form id="cadastro" class="form-horizontal dados-cadastro" method="POST" action="<?=base_url()?>cadastro/novo/">
            <legend>Quero me cadastrar</legend>
            <div class="control-group">
              <label class="control-label" for="nome">Nome</label>
              <div class="controls">
                <input type="text" id="nome" name="nome" class="span8"><i class="icon-ok"></i>
                <span class="help-inline"><small>Nome e sobrenome</small></span>
              </div>
            </div>
            <div class="control-group email">
              <label class="control-label" for="email">Seu e-mail</label>
              <div class="controls">
                <input type="text" id="email" name="email" class="span8" ><i class="icon-ok"></i>
                <span class="help-inline valid"><small> E-mail válido</small></span>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> E-mail inválido</small></span>
                <span class="help-inline joined"><i class="icon-minus-sign"></i> <small> Já cadastrado</small></span>
                <span class="help-inline loading"><i class="icon-refresh"></i> <small> Aguarde</small></span>
              </div>
            </div>
            <div class="control-group telefone">
              <label class="control-label" for="telefone">Telefone principal</label>
              <div class="controls">
                <input type="text" id="telefone" name="telefone" class="span8" ><i class="icon-ok"></i>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Telefone inválido</small></span>
                <span class="help-block ddd"><small>Com DDD</small></span>
              </div>
            </div>
            <div class="control-group senha">
              <label class="control-label" for="senha">Crie uma senha</label>
              <div class="controls">
                <input type="password" id="senha" name="senha" class="span8" ><i class="icon-ok"></i>
                <!-- <div class="help-inline"><label for="mostrar-digitos"><input type="checkbox" id="mostrar-digitos"><small> Mostrar dígitos</small></label></div> -->
              </div>
            </div>
            <div class="control-group resenha">
              <label class="control-label" for="resenha">Re-digite a senha</label>
              <div class="controls">
                <input type="password" id="resenha" name="resenha" class="span8" ><i class="icon-ok"></i>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Senha diferente.</small></span>
              </div>
            </div>
            <div class="control-group estado">
              <label class="control-label" for="estado">Estado</label>
              <div class="controls">
                <select id="estado" name="estado" class="span8">
                  <option></option>
                </select>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Informe seu estado.</small></span>
              </div>
            </div>
            <div class="control-group cidade">
              <label class="control-label" for="cidade">Cidade</label>
              <div class="controls">
                <select id="cidade" name="cidade" class="span8" disabled>
                  <option></option>
                </select>
                <span class="help-inline loading"><i class="icon-refresh"></i> <small> Aguarde</small></span>
                <span class="help-inline invalid"><i class="icon-ban-circle"></i> <small> Informe sua cidade.</small></span>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="hidden" id="TipoAnunciante" name="TipoAnunciante" value="1" alt="TipoAnunciante">
                <input type="hidden" id="EstadoText" name="EstadoText" value="" alt="Estado">
                <input type="hidden" id="CidadeText" name="CidadeText" value="" alt="Cidade">
                <button type="submit" class="btn btn-success btn-large pull-right">Continuar &raquo;</button>
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

