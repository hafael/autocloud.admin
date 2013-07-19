<form id="novo-anuncio" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Veículo</h3>
    <div class="control-group">
      <label class="control-label" for="fabricante">Marca</label>
      <div class="controls">
        <select id="fabricante" name="fabricante">
          <option value="<?=$this->anuncio_carro->TB_FabricanteVeiculo_id?>"><?=$this->anuncio_carro->Montadora?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="modelo">Modelo</label>
      <div class="controls">
        <select id="modelo" name="modelo">
          <option value="<?=$this->anuncio_carro->TB_ModeloVeiculo_TB_FabricanteVeiculo_id?>"><?=$this->anuncio_carro->Modelo?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoFab">Ano de fabricação</label>
      <div class="controls">
        <select id="anoFab" name="anoFab">
          <option value="<?=$this->anuncio_carro->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id?>"><?=$this->anuncio_carro->AnoFab?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoMod">Ano do modelo</label>
      <div class="controls">
        <select id="anoMod" name="anoMod">
          <option value="<?=$this->anuncio_carro->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id?>"><?=$this->anuncio_carro->AnoMod?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="versao">Versão</label>
      <div class="controls">
        <select id="versao" name="versao">
          <option value="<?=$this->anuncio_carro->TB_VersaoVeiculo_id?>"><?=$this->anuncio_carro->Versao?></option>
        </select>
      </div>
    </div>

  </div>
  <div class="span6 pull-right">
    <h3>Dados adicionais</h3>
    <div class="control-group">
      <label class="checkbox inline">
        <input type="checkbox" id="ar_condicionado" name="ar_condicionado" <?php if($this->anuncio_carro->ArCondicionado) echo 'checked'?> >
        Ar
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="vidro_eletrico" name="vidro_eletrico" <?php if($this->anuncio_carro->VidroEletrico) echo 'checked'?> >
        Vidro
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="direcao_hidraulica" name="direcao_hidraulica" <?php if($this->anuncio_carro->DirecaoHidraulica) echo 'checked'?> >
        Direção
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="air_bag" name="air_bag" <?php if($this->anuncio_carro->AirBag) echo 'checked'?> >
        Air bag
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="gas_natural" name="gas_natural" <?php if($this->anuncio_carro->GasNatural) echo 'checked'?> >
        GNV
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="blindado" name="blindado" <?php if($this->anuncio_carro->Blindado) echo 'checked'?> >
        Blindado
      </label>
    </div>
    <div class="control-group">
      <label class="control-label">Combustível</label>
      <div class="controls">
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Flex" <?php if($this->anuncio_carro->Combustivel=="Flex") echo "checked"?> >
          Flex
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Gasolina" <?php if($this->anuncio_carro->Combustivel=="Gasolina") echo "checked"?> >
          Gasolina
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Álcool" <?php if($this->anuncio_carro->Combustivel=="Álcool") echo "checked"?> >
          Álcool
        </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="valor_venda">Valor de venda</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">R$</span>
          <input class="span8" id="valor_venda" name="valor_venda" type="text" value="<?=$this->moedas->eua2bra($this->anuncio->ValorVenda)?>">
        </div>
      </div> 
    </div>
    <div class="control-group">
      <label class="control-label" for="tel_contato">Telefone para contato</label>
      <div class="controls">
        <input type="text" class="disabled" id="tel_contato" name="tel_contato" value="<?=$this->anuncio->TelContato?>" >
        <div class="help"><a href="#">Usar outro número</a></div>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="descricao">Breve descrição</label>
      <div class="controls">
        <textarea class="span12" id="descricao" name="descricao" rows="3"><?=$this->anuncio->Descricao?></textarea>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <div class="btn-group pull-right">
          <button class="btn btn-danger btn-large dropdown-toggle" data-toggle="dropdown">Ações <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <?php 
            if($this->anuncio->Status){
              ?>
              <li><a href="<?=base_url()?>admin/meusanuncios/desativa/<?=$this->anuncio->id?>">Desativar anúncio</a></li>
              <?php
            }else{
              ?>
              <li><a href="<?=base_url()?>admin/meusanuncios/ativa/<?=$this->anuncio->id?>">Ativar anúncio</a></li>
              <?php
            }
            ?>
            
            <li class="divider"></li>
            <li><a href="#removerAnuncio" data-toggle="modal">Remover</a></li>
          </ul>
        </div>
        <input type="hidden" id="fabricanteText" name="fabricanteText" value="<?=$this->anuncio_carro->Montadora?>" alt="Montadora">
        <input type="hidden" id="modeloText" name="modeloText" value="<?=$this->anuncio_carro->Modelo?>" alt="Modelo">
        <input type="hidden" id="AnoFabText" name="AnoFabText" value="<?=$this->anuncio_carro->AnoFab?>" alt="Ano Fabricação">
        <input type="hidden" id="AnoModText" name="AnoModText" value="<?=$this->anuncio_carro->AnoMod?>" alt="Ano Modelo">
        <input type="hidden" id="versaoText" name="versaoText" value="<?=$this->anuncio_carro->Versao?>" alt="Versão">
        <input type="hidden" id="TipoAnuncio" name="TipoAnuncio" value="1" alt="Gratuito">
        <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="1" alt="carro">
        <button type="submit" class="btn btn-primary btn-large pull-right">Salvar Edição</button>
      </div>
      
    </div>
  </div>
  
</form>
<!-- Modal Remover -->
<div id="removerAnuncio" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Remover anúncio</h3>
  </div>
  <div class="modal-body">
    <p>Tem certeza que deseja remover o anúncio:</p>
    <p><?=$this->anuncio->Titulo?></p>

  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <a href="<?=base_url()?>admin/meusanuncios/remove/<?=$this->anuncio->id?>" class="btn btn-danger">Remover</a>
  </div>
</div>