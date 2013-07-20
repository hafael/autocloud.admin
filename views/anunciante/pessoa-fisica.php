<form id="meus-dados" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Dados Pessoais</h3>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input type="text" id="nome" name="nome" class="span10" value="<?=$this->anunciantePF->NomeAnunciante?>" placeholder="Seu nome">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input type="text" id="email" name="email" class="span10" value="<?=$this->anunciante->Email?>" placeholder="Seu e-mail">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="estado">Estado</label>
      <div class="controls">
        <select id="estado" name="estado">
          <option value="1">Rio de Janeiro</option>
          <option value="2">São Paulo</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="cidade">Cidade</label>
      <div class="controls">
        <select id="cidade" name="cidade">
          <option value="1">São Gonçalo</option>
          <option value="2">Niterói</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-primary btn-large">Salvar</button>
      </div>
      
    </div>

  </div>
  
</form>