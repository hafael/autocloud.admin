<form id="novo-anuncio" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Selecione o veículo</h3>
    <div class="control-group">
      <label class="control-label" for="fabricante">Marca</label>
      <div class="controls">
        <select id="fabricante" name="fabricante" disabled>
          <option>Aguarde</option>
          <!--
          <optgroup label="Marcas nacionais">
            <option value="54">CHEVROLET</option>
            <option value="20">FIAT</option>
            <option value="52">VOLKSWAGEN</option>
            <option value="2">FORD</option>
            <option value="55">HONDA</option>
            <option value="59">HYUNDAI</option>
            <option value="4">TOYOTA</option>
            <option value="3">PEUGEOT</option>
            <option value="43">RENAULT</option>
            <option value="56">CITROËN</option>
            <option value="63">NISSAN</option>
          </optgroup>
            <optgroup label="Outras marcas">
            <option value="138">ACURA</option>
            <option value="7">AUDI</option>
            <option value="10">BMW</option>
            <option value="14">CHRYSLER</option>
            <option value="57">LAND ROVER</option>
            <option value="160">MAHINDRA</option>
            <option value="61">MERCEDES BENZ</option>
            <option value="62">MITSUBISHI</option>
            <option value="65">VOLVO</option>
            <option value="138">ACURA</option>
            <option value="5">AGRALE</option>
            <option value="69">ALFA ROMEO</option>
            <option value="71">AMGC</option>
            <option value="72">ASIA MOTORS</option>
            <option value="180">ASTON MARTIN</option>
            <option value="9">BENTLEY</option>
            <option value="73">BUGGY</option>
            <option value="74">BUICK</option>
            <option value="12">CADILLAC</option>
            <option value="75">CBT</option>
            <option value="13">CHAMONIX</option>
            <option value="155">CHANA MOTORS</option>
            <option value="167">CHERY</option>
            <option value="15">CROSS LANDER</option>
            <option value="76">DAEWOO</option>
            <option value="16">DAIHATSU</option>
            <option value="17">DODGE</option>
            <option value="165">Effa Motors</option>
            <option value="18">ENGESA</option>
            <option value="181">ESPECIAIS/RARIDADES</option>
            <option value="58">FERRARI</option>
            <option value="80">GMC</option>
            <option value="23">GURGEL</option>
            <option value="185">HAFEI MOTORS</option>
            <option value="55">HONDA</option>
            <option value="24">HUMMER</option>
            <option value="59">HYUNDAI</option>
            <option value="25">INFINITI</option>
            <option value="26">ISUZU</option>
            <option value="82">IVECO</option>
            <option value="188">JAC</option>
            <option value="27">JAGUAR</option>
            <option value="68">JEEP</option>
            <option value="186">JINBEI MOTORS</option>
            <option value="28">JPX</option>
            <option value="60">KIA MOTORS</option>
            <option value="29">LADA</option>
            <option value="152">LAMBORGHINI</option>
            <option value="57">LAND ROVER</option>
            <option value="31">LEXUS</option>
            <option value="184">LIFAN MOTORS</option>
            <option value="83">LINCOLN</option>
            <option value="32">LOBINI</option>
            <option value="84">LOTUS</option>
            <option value="160">MAHINDRA</option>
            <option value="33">MARCOPOLO</option>
            <option value="34">MASERATI</option>
            <option value="85">MATRA</option>
            <option value="35">MAZDA</option>
            <option value="36">MERCURY</option>
            <option value="37">MINI</option>
            <option value="38">MIURA</option>
            <option value="39">MP LAFER</option>
            <option value="40">OLDSMOBILE</option>
            <option value="41">PLYMOUTH</option>
            <option value="87">PONTIAC</option>
            <option value="42">PORSCHE</option>
            <option value="88">PUMA</option>
            <option value="190">RANGE ROVER</option>
            <option value="154">ROLLS ROYCE</option>
            <option value="89">ROVER</option>
            <option value="45">SAAB</option>
            <option value="46">SATURN</option>
            <option value="90">SEAT</option>
            <option value="47">SHELBY</option>
            <option value="91">SMART</option>
            <option value="49">SSANGYONG</option>
            <option value="50">SUBARU</option>
            <option value="66">SUZUKI</option>
            <option value="64">TROLLER</option>
            <option value="65">VOLVO</option>
            <option value="53">WILLYS</option>
          </optgroup>
          -->
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
  </div>
  <div class="span6 pull-right">
    <h3>Dados adicionais</h3>
    <div class="control-group">
      <label class="checkbox inline">
        <input type="checkbox" id="ar_condicionado" name="ar_condicionado" value="1">
        Ar
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="vidro_eletrico" name="vidro_eletrico" value="1">
        Vidro
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="direcao_hidraulica" name="direcao_hidraulica" value="1">
        Direção
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="air_bag" name="air_bag" value="1">
        Air bag
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="gas_natural" name="gas_natural" value="1">
        GNV
      </label>
      <label class="checkbox inline">
        <input type="checkbox" id="blindado" name="blindado" value="1">
        Blindado
      </label>
    </div>
    <div class="control-group">
      <label class="control-label">Combustível</label>
      <div class="controls">
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Flex" checked>
          Flex
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Gasolina">
          Gasolina
        </label>
        <label class="radio">
          <input type="radio" name="combustivel" id="combustivel" value="Álcool">
          Álcool
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
        <input type="hidden" id="TipoVeiculo" name="TipoVeiculo" value="1" alt="carro">
        <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir</button>
      </div>
    </div>
  </div>
  
</form>