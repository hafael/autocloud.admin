<form id="novo-anuncio" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Veículo</h3>
    <div class="control-group">
      <label class="control-label" for="fabricante">Marca</label>
      <div class="controls">
        <select id="fabricante" name="fabricante">
          <option value="<?=$this->anuncio_moto->TB_FabricanteVeiculo_id?>"><?=$this->anuncio_moto->Montadora?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="modelo">Modelo</label>
      <div class="controls">
        <select id="modelo" name="modelo">
          <option value="<?=$this->anuncio_moto->TB_ModeloVeiculo_TB_FabricanteVeiculo_id?>"><?=$this->anuncio_moto->Modelo?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoFab">Ano de fabricação</label>
      <div class="controls">
        <select id="anoFab" name="anoFab">
          <option value="<?=$this->anuncio_moto->TB_AnoFabricacaoVeiculo_TB_ModeloVeiculo_id?>"><?=$this->anuncio_moto->AnoFab?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoMod">Ano do modelo</label>
      <div class="controls">
        <select id="anoMod" name="anoMod">
          <option value="<?=$this->anuncio_moto->TB_AnoModeloVeiculo_TB_AnoFabricacaoVeiculo_id?>"><?=$this->anuncio_moto->AnoMod?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="versao">Versão</label>
      <div class="controls">
        <select id="versao" name="versao">
          <option value="<?=$this->anuncio_moto->TB_VersaoVeiculo_id?>"><?=$this->anuncio_moto->Versao?></option>
        </select>
      </div>
    </div>
    <h3>Localização</h3>
    <p class="lead">Informe a localização do veículo</p>
    <div class="control-group">
      <label class="control-label" for="estado">Estado</label>
      <div class="controls">
        <select id="estado" name="estado">
          <option value="<?=$this->anunciante->TB_Estado_id?>"><?=$this->anunciante->TB_Estado_Nome?></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="cidade">Cidade</label>
      <div class="controls">
        <select id="cidade" name="cidade">
          <option value="<?=$this->anunciante->TB_Cidade_id?>"><?=$this->anunciante->TB_Cidade_Nome?></option>
        </select>
      </div>
    </div>

  </div>
  <div class="span6 pull-right">
    <h3>Dados adicionais</h3>
    <div class="control-group">
      <label class="control-label">Opcionais</label>
      <div class="controls">
        <label class="checkbox inline">
          <input type="checkbox" id="abs" name="abs" <?php if($this->anuncio_moto->Abs) echo 'checked'?> >
          Abs
        </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Combustível</label>
      <div class="controls">
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Flex" <?php if($this->anuncio_moto->Combustivel=="Flex") echo "checked"?> >
          Flex
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Gasolina" <?php if($this->anuncio_moto->Combustivel=="Gasolina") echo "checked"?> >
          Gasolina
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
        <input type="hidden" id="modeloText" name="modeloText" value="<?=$this->anuncio_moto->Modelo?>" alt="Modelo">
        <input type="hidden" id="AnoFabText" name="AnoFabText" value="<?=$this->anuncio_moto->AnoFab?>" alt="Ano Fabricação">
        <input type="hidden" id="AnoModText" name="AnoModText" value="<?=$this->anuncio_moto->AnoMod?>" alt="Ano Modelo">
        <input type="hidden" id="versaoText" name="versaoText" value="<?=$this->anuncio_moto->Versao?>" alt="Versão">
        <input type="hidden" id="EstadoText" name="EstadoText" value="<?=$this->anunciante->TB_Estado_Nome?>" alt="Estado">
        <input type="hidden" id="CidadeText" name="CidadeText" value="<?=$this->anunciante->TB_Cidade_Nome?>" alt="Cidade">
        <input type="hidden" id="TipoAnuncio" name="TipoAnuncio" value="<?=$this->anuncio->TipoAnuncio?>">
        <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="<?=$this->anuncio->TipoAnuncio?>">
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