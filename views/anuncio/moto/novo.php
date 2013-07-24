<form id="novo-anuncio" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Selecione o veículo</h3>
    <div class="control-group">
      <label class="control-label" for="fabricante">Marca</label>
      <div class="controls">
        <select id="fabricante" name="fabricante" disabled>
          <option>Aguarde</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="modelo">Modelo</label>
      <div class="controls">
        <select id="modelo" name="modelo" disabled>
          <option></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoFab">Ano de fabricação</label>
      <div class="controls">
        <select id="anoFab" name="anoFab" disabled>
          <option></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoMod">Ano do modelo</label>
      <div class="controls">
        <select id="anoMod" name="anoMod" disabled>
          <option></option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="versao">Versão</label>
      <div class="controls">
        <select id="versao" name="versao" disabled>
          <option></option>
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
          <input type="checkbox" id="abs" name="abs" value="1">
          Abs
        </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label">Combustível</label>
      <div class="controls">
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Flex">
          Flex
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Gasolina" checked>
          Gasolina
        </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="valor_venda">Valor de venda</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">R$</span>
          <input class="span8" id="valor_venda" name="valor_venda" type="text">
        </div>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="tel_contato">Telefone para contato</label>
      <div class="controls">
        <input type="text" class="disabled" id="tel_contato" name="tel_contato" value="(21) 8083-6612" >
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
        <input type="hidden" id="fabricanteText" name="fabricanteText" value="" alt="Montadora">
        <input type="hidden" id="modeloText" name="modeloText" value="" alt="Modelo">
        <input type="hidden" id="AnoFabText" name="AnoFabText" value="" alt="Ano Fabricação">
        <input type="hidden" id="AnoModText" name="AnoModText" value="" alt="Ano Modelo">
        <input type="hidden" id="versaoText" name="versaoText" value="" alt="Versão">
        <input type="hidden" id="EstadoText" name="EstadoText" value="<?=$this->anunciante->TB_Estado_Nome?>" alt="Estado">
        <input type="hidden" id="CidadeText" name="CidadeText" value="<?=$this->anunciante->TB_Cidade_Nome?>" alt="Cidade">
        <input type="hidden" id="TipoAnuncio" name="TipoAnuncio" value="1" alt="Gratuito">
        <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="2" alt="carro">
        <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir</button>
      </div>
    </div>
  </div>
  
</form>