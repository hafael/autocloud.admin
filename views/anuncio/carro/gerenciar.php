<form id="novo-anuncio" class="form-horizontal" method="POST">
  <div class="span6">
    <h3>Veículo</h3>
    <div class="control-group">
      <label class="control-label" for="fabricante">Marca</label>
      <div class="controls">
        <select id="fabricante" name="fabricante">
          <option value="<?=$this->anuncio_carro->TB_FabricanteVeiculo_id?>"><?=$this->anuncio_carro->Montadora?></option>
        </select>
        <span class="help-inline loading"><i class="icon-refresh"></i> <small> Aguarde</small></span>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="modelo">Modelo</label>
      <div class="controls">
        <select id="modelo" name="modelo">
          <option value="<?=$this->anuncio_carro->TB_ModeloVeiculo_TB_FabricanteVeiculo_id?>"><?=$this->anuncio_carro->Modelo?></option>
        </select>
        <span class="help-inline loading"><i class="icon-refresh"></i> <small> Aguarde</small></span>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoFab">Ano de fabricação</label>
      <div class="controls">
        <select id="anoFab" name="anoFab">
          <option value="<?=$this->anuncio_carro->AnoFab?>" selected><?=$this->anuncio_carro->AnoFab?></option>
          <option disabled></option>
          <option value="2014">2014</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>
          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>
          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
          <option value="1979">1979</option>
          <option value="1978">1978</option>
          <option value="1977">1977</option>
          <option value="1976">1976</option>
          <option value="1975">1975</option>
          <option value="1974">1974</option>
          <option value="1973">1973</option>
          <option value="1972">1972</option>
          <option value="1971">1971</option>
          <option value="1970">1970</option>
          <option value="1969">1969</option>
          <option value="1968">1968</option>
          <option value="1967">1967</option>
          <option value="1966">1966</option>
          <option value="1965">1965</option>
          <option value="1964">1964</option>
          <option value="1963">1963</option>
          <option value="1962">1962</option>
          <option value="1961">1961</option>
          <option value="1960">1960</option>
          <option value="1959">1959</option>
          <option value="1958">1958</option>
          <option value="1957">1957</option>
          <option value="1956">1956</option>
          <option value="1955">1955</option>
          <option value="1954">1954</option>
          <option value="1953">1953</option>
          <option value="1952">1952</option>
          <option value="1951">1951</option>
          <option value="1950">1950</option>
          <option value="1949">1949</option>
          <option value="1948">1948</option>
          <option value="1947">1947</option>
          <option value="1946">1946</option>
          <option value="1945">1945</option>
          <option value="1944">1944</option>
          <option value="1943">1943</option>
          <option value="1942">1942</option>
          <option value="1941">1941</option>
          <option value="1940">1940</option>
          <option value="1939">1939</option>
          <option value="1938">1938</option>
          <option value="1937">1937</option>
          <option value="1936">1936</option>
          <option value="1935">1935</option>
          <option value="1934">1934</option>
          <option value="1933">1933</option>
          <option value="1932">1932</option>
          <option value="1931">1931</option>
          <option value="1930">1930</option>
          <option value="1929">1929</option>
          <option value="1928">1928</option>
          <option value="1927">1927</option>
          <option value="1926">1926</option>
          <option value="1925">1925</option>
          <option value="1924">1924</option>
          <option value="1923">1923</option>
          <option value="1922">1922</option>
          <option value="1921">1921</option>
          <option value="1920">1920</option>
          <option value="1919">1919</option>
          <option value="1918">1918</option>
          <option value="1917">1917</option>
          <option value="1916">1916</option>
          <option value="1915">1915</option>
          <option value="1914">1914</option>
          <option value="1913">1913</option>
          <option value="1912">1912</option>
          <option value="1911">1911</option>
          <option value="1910">1910</option>
          <option value="1909">1909</option>
          <option value="1908">1908</option>
          <option value="1907">1907</option>
          <option value="1906">1906</option>
          <option value="1905">1905</option>
          <option value="1904">1904</option>
          <option value="1903">1903</option>
          <option value="1902">1902</option>
          <option value="1901">1901</option>
          <option value="1900">1900</option>
          <option value="1899">1899</option>
          <option value="1898">1898</option>
          <option value="1897">1897</option>
          <option value="1896">1896</option>
          <option value="1895">1895</option>
          <option value="1894">1894</option>
          <option value="1893">1893</option>
          <option value="1892">1892</option>
          <option value="1891">1891</option>
          <option value="1890">1890</option>
          <option value="1889">1889</option>
          <option value="1888">1888</option>
          <option value="1887">1887</option>
          <option value="1886">1886</option>
          <option value="1885">1885</option>
          <option value="1884">1884</option>
          <option value="1883">1883</option>
          <option value="1882">1882</option>
          <option value="1881">1881</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="anoMod">Ano do modelo</label>
      <div class="controls">
        <select id="anoMod" name="anoMod">
          <option value="<?=$this->anuncio_carro->AnoMod?>"><?=$this->anuncio_carro->AnoMod?></option>
        </select>
      </div>
    </div>
    <!--
    <div class="control-group">
      <label class="control-label" for="versao">Versão</label>
      <div class="controls">
        <select id="versao" name="versao">
          <option value="<?=$this->anuncio_carro->TB_VersaoVeiculo_id?>"><?=$this->anuncio_carro->Versao?></option>
        </select>
      </div>
    </div>
    -->
    <div class="control-group">
      <label class="control-label" for="versao">Versão</label>
      <div class="controls">
        <input type="text" id="versao" name="versao" value="<?=$this->anuncio_carro->Versao?>" placeholder="Ex.: 1.6 EcoMotion">
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
      <label class="control-label" for="opcionais">Opcionais</label>
      <div class="controls">
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
      <label class="control-label" for="transmissao">Câmbio</label>
      <div class="controls">
        <select id="transmissao" name="transmissao">
          <option value="<?=$this->anuncio_carro->Transmissao?>"><?=$this->anuncio_carro->Transmissao?></option>
          <option disabled></option>
          <option value="Manual">Manual</option>
          <option value="Automático">Automático</option>
          <option value="Semi-Automático">Semi-Automático</option>
          <option value="Tiptronic">Tiptronic</option>
          <option value="CVT">CVT</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="portas">Portas</label>
      <div class="controls">
        <select id="portas" name="portas">
          <option value="<?=$this->anuncio_carro->Portas?>"><?=$this->anuncio_carro->Portas?> Portas</option>
          <option disabled></option>
          <option value="2">2 Portas</option>
          <option value="3">3 Portas</option>
          <option value="4">4 Portas</option>
          <option value="5">5 Portas</option>
        </select>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="km">Quilometragem</label>
      <div class="controls">
        <div class="input-append">
          <input class="span8" id="quilometragem" name="quilometragem" type="text" value="<?=$this->anuncio_carro->Km?>">
          <span class="add-on">Km</span>
        </div>
        <div class="help-inline">Vazio para 0km</div>
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
        <div class="help-inline">Será exibido no anúncio</div>
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
        <div class="btn-group">
          <button class="btn btn-danger btn-large dropdown-toggle" data-toggle="dropdown">Ações <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <?php 
            if($this->anuncio->Status){
              ?>
              <li><a href="<?=base_url()?>meusanuncios/desativa/<?=$this->anuncio->id?>">Desativar anúncio</a></li>
              <?php
            }else{
              ?>
              <li><a href="<?=base_url()?>meusanuncios/ativa/<?=$this->anuncio->id?>">Ativar anúncio</a></li>
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
        <input type="hidden" id="EstadoText" name="EstadoText" value="<?=$this->anunciante->TB_Estado_Nome?>" alt="Estado">
        <input type="hidden" id="CidadeText" name="CidadeText" value="<?=$this->anunciante->TB_Cidade_Nome?>" alt="Cidade">
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
    <a href="<?=base_url()?>meusanuncios/remove/<?=$this->anuncio->id?>" class="btn btn-danger">Remover</a>
  </div>
</div>