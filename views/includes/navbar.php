<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?=base_url()?>">Autocloud - Gerenciador</a>
      <?php 
      if($this->anunciante->logged()){
      ?>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?=base_url()?>">Dashboard</a></li>
          <li><a href="<?=base_url()?>meus-anuncios">Meus anúncios</a></li>
          <li><a href="<?=base_url()?>novo-anuncio">Criar novo anúncio</a></li>
          <!--
          <li><a href="<?=base_url()?>perguntas">Perguntas</a></li>
          <li><a href="<?=base_url()?>relatorios">Relatórios</a></li>
          -->
        </ul>
        <ul class="nav pull-right">
          <!--<li><a href="<?=base_url()?>upgrade">Upgrade!</a></li>-->
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->anunciantePF->NomeAnunciante?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>meusdados">Meus dados</a></li>
              <li><a href="<?=base_url()?>meusdados/senha">Alterar senha</a></li>
              <li class="divider"></li>
              <li><a href="<?=base_url()?>login/logout">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
      <?php
      }else{
      ?>
      <div class="nav-collapse collapse">
        <ul class="nav pull-right">
          <li><a href="<?=base_url()?>cadastro">Cadastre-se</a></li>
        </ul>
      </div><!--/.nav-collapse -->
      <?php
      }
      ?>
    </div>
  </div>
</div>