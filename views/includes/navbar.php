<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?=base_url()?>admin">Autocloud Cockpit</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li><a href="<?=base_url()?>admin">Dashboard</a></li>
          <li><a href="<?=base_url()?>admin/meus-anuncios">Meus anúncios</a></li>
          <li><a href="<?=base_url()?>admin/novo-anuncio">Criar novo anúncio</a></li>
          <!--
          <li><a href="<?=base_url()?>admin/perguntas">Perguntas</a></li>
          <li><a href="<?=base_url()?>admin/relatorios">Relatórios</a></li>
          -->
        </ul>
        <ul class="nav pull-right">
          <!--<li><a href="<?=base_url()?>admin/upgrade">Upgrade!</a></li>-->
          <li class="divider-vertical"></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->anunciantePF->NomeAnunciante?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>admin/meusdados">Meus dados</a></li>
              <li><a href="<?=base_url()?>admin/meusdados/senha">Alterar senha</a></li>
              <li class="divider"></li>
              <li><a href="<?=base_url()?>logout">Sair</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>