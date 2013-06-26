<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once('includes/head.php') ?>

  </head>

  <body>

    <?php include_once('includes/navbar.php') ?>

    <div class="container">
      <h1>Dashboard Autocloud</h1>
      <p class="lead">Criar novo anúncio</p>
      <div class="row-fluid">

        <div class="span6">
          <h3>Passo 1</h3>
          <form class="form-horizontal">
            <div class="control-group">
              <label class="control-label" for="marca">Marca</label>
              <div class="controls">
                <select id="marca" name="marca">
                  <option></option>
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
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="modelo">Modelo</label>
              <div class="controls">
                <select id="modelo" name="modelo">
                  <option></option>
                  <option>Astra</option>
                  <option>Vectra</option>
                  <option>Cruze</option>
                  <option>Corsa</option>
                  <option>Malibu</option>
                  <option>Camaro</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="ano-fab">Ano de fabricação</label>
              <div class="controls">
                <select id="ano-fab" name="ano-fab">
                  <option></option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                  <option>2009</option>
                  <option>2008</option>
                  <option>2007</option>
                  <option>2006</option>
                  <option>2005</option>
                  <option>2004</option>
                  <option>2003</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="ano-mod">Ano do modelo</label>
              <div class="controls">
                <select id="ano-mod" name="ano-mod">
                  <option></option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                  <option>2009</option>
                  <option>2008</option>
                  <option>2007</option>
                  <option>2006</option>
                  <option>2005</option>
                  <option>2004</option>
                  <option>2003</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="versao">Versão</label>
              <div class="controls">
                <select id="versao" name="versao">
                  <option></option>
                  <option>Expression 2.0</option>
                  <option>Elite 2.0</option>
                  <option>Elegance 2.0</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir</button>
              </div>
            </div>
          </form>
        </div>
        <div class="span6 pull-right">
          <h3>Passo 2</h3>
          <form class="form-horizontal">
            <div class="control-group">
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1">
                Ar
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2">
                Vidro
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3">
                Direção
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3">
                Air bag
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3">
                GNV
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3">
                Blindado
              </label>
            </div>
            <div class="control-group">
              <label class="control-label">Combustível</label>
              <div class="controls">
                <label class="radio">
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                  Flex
                </label>
                <label class="radio">
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2">
                  Gasolina
                </label>
                <label class="radio">
                  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option2">
                  Alcool
                </label>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="ano-fab">Ano de fabricação</label>
              <div class="controls">
                <select id="ano-fab" name="ano-fab">
                  <option></option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                  <option>2009</option>
                  <option>2008</option>
                  <option>2007</option>
                  <option>2006</option>
                  <option>2005</option>
                  <option>2004</option>
                  <option>2003</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="ano-mod">Ano do modelo</label>
              <div class="controls">
                <select id="ano-mod" name="ano-mod">
                  <option></option>
                  <option>2013</option>
                  <option>2012</option>
                  <option>2011</option>
                  <option>2010</option>
                  <option>2009</option>
                  <option>2008</option>
                  <option>2007</option>
                  <option>2006</option>
                  <option>2005</option>
                  <option>2004</option>
                  <option>2003</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="versao">Versão</label>
              <div class="controls">
                <select id="versao" name="versao">
                  <option></option>
                  <option>Expression 2.0</option>
                  <option>Elite 2.0</option>
                  <option>Elegance 2.0</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <button type="submit" class="btn btn-primary btn-large pull-right">Prosseguir</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <?php include_once('includes/footer.php') ?>
    </div> <!-- /container -->


    <?php include_once('includes/scripts_footer.php') ?>
    <script type="text/javascript">
      $("#marca").select2({
        placeholder: "Selecine uma marca",
        allowClear: true
      });
      $("#modelo").select2({
        placeholder: "Selecine um modelo",
        allowClear: true
      });
      $("#ano-fab").select2({
        placeholder: "Ano de fabricação",
        allowClear: true
      });
      $("#ano-mod").select2({
        placeholder: "Ano do modelo",
        allowClear: true
      });
      $("#versao").select2({
        placeholder: "Versão do veículo",
        allowClear: true
      });
    </script>


  </body>
</html>

