<?php 

require ("config.php");
include ("inc_head.php");
include ("link_topo.php");
?>

<title>Registros</title>
</head>

<body>
  <div class="container">
    <form name="form_registro" method="post" enctype="multipart/form-data" action="">
      <div class="col-xs-12 form-group">
        <div class="col-xs-12">
          <label for="iduser" name="iduser" id="iduser">Seu ID: <?php echo "$idrec"?></label><br />
          <label for="reg_nome_ativ">Nome da Atividade:</label>
          <input class="form-control" placeholder="Por Exemplo: Corte e Costura da Terceira Idade" name="reg_nome_ativ" type="text" id="reg_nome_ativ" size="100" />
        </div>
      </div>
      <div class="col-xs-12 form-group">
        <div class="col-xs-12">
          <label for="reg_breve_res">Breve Resumo da atividade:</label>
          <textarea class="form-control" placeholder="( Atividades desempenhadas )" name="reg_breve_res" cols="102" rows="5"  id="reg_breve_res"></textarea>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="col-xs-12 col-sm-6 form-group">
          <label for="tipo" >Tipo de Atividade:</label>
          <select class="form-control" name="tipo" id="tipo">
            <option></option>
            <option>Cultura Digital</option>
            <option>CIS (Ações Culturais)</option>
            <option>Confraternização</option>
            <option>Congresso</option>
            <option>Curso</option>
            <option>Debate</option>
            <option>Ensaio</option>
            <option>Exposição</option>
            <option>Evento Externo</option>
            <option>Feira Cultural</option>
            <option>Fórum</option>
            <option>GPE CIS</option>
            <option>Montagem</option>
            <option>Mostra</option>
            <option>Oficina</option>
            <option>Oficinas Externas do CIS</option>
            <option>Outros</option>
            <option>Palestra</option>
            <option>Peça Teatral</option>
            <option>Rede Agro (Ações Culturais)</option>
            <option>Rede Agro (Sexta na Estação)</option>
            <option>Reunião</option>
            <option>Reunião Externa</option>
            <option>Seminário</option>
            <option>Show</option>
            <option>Visita Externa</option>
            <option>Visita Interna</option>
          </select>
        </div>
        <div class="col-xs-12 col-sm-6 form-group">
          <label for="ano">Classificação: <font color="#999999"> ( PREAC ) </font></label>
          <select class="form-control" name="classificacao" id="classificacao">
            <option></option>
            <option>Cursos Ministrados</option> 
            <option>Espetáculos e Eventos Culturais</option>
            <option>Evento Cultural de Inclusão Social</option>
            <option>Eventos Externos</option>
            <option>Oficinas</option>
            <option>Oficinas em Parceria</option>
            <option>Palestras, Congresso e Seminários</option>
          </select>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 form-group">
        <label for="local" class="col-xs-12">Local onde ocorreu a atividade:</label>
        <div class="checkbox col-xs-12">
          <label for="salaomaior" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Armazem do Cafe (salao maior)"/> Armazém do Café (salão maior)
          </label>
          
          <label for="salaomenor" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Armazem do Cafe (salao menor)"/>Armazém do Café (salão menor)
          </label>
          
          
          <label for="galeriaum" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Galeria I"/>Galeria I
          </label>
          
          
          <label for="galeriadois" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Galeria II"/>Galeria II
          </label>
          
          
          <label for="gare" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Gare"/>Gare 
          </label>
          
          
          <label for="multiusoum" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Sala Multiuso I"/>Sala Multiuso I
          </label>
          
          
          <label for="multiusodois" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Sala Multiuso II"/>Sala Multiuso II
          </label>
          
          
          <label for="culturadigital" class="col-xs-12">
            <input type="checkbox" name="l[]"   value="Espaço de Cultura Digital"/>Espaço de Cultura Digital
          </label>
          
          
          <label for="reunioes" class="col-xs-12">
            <input type="checkbox" name="l[]"  value="Sala de Reunioes"/>Sala de Reuniões
          </label>
          <label for="estacionamento" class="col-xs-12">
            <input type="checkbox" name="l[]"  value="Estacionamento"/>Estacionamento
          </label>
          <label class="col-xs-12">
            <input type="checkbox" name="l[]"  value="Outro"/>Outro
          </label>
          <input class="form-control" name="outrolocal" type="text" id="outrolocal" size="26" />
          
        </div>
      </div>

      <div class="col-xs-12 col-sm-4 form-group">

       <label for="faixa" class="col-xs-12">Faixa etária do público:</label>
       
       <div class="checkbox col-xs-12">

         <label class="col-xs-12">
           <input type="checkbox" name="f[]"   value="Até 7 anos"/>Até 7 anos 
         </label>
         
         
         <label class="col-xs-12">
           <input type="checkbox" name="f[]"   value="De 8 a 12 anos"/>De 8 a 12 anos 
         </label>
         
         
         <label class="col-xs-12">
           <input type="checkbox" name="f[]"   value="De 13 a 17 anos"/>De 13 a 17 anos
         </label>
         
         
         <label class="col-xs-12">
           <input type="checkbox" name="f[]"   value="Maiores de 18 anos"/>Maiores de 18 anos
         </label>
         
         
         <label class="col-xs-12">
           <input type="checkbox" name="f[]"  value="Terceira idade"/>Terceira idade
         </label>
         
       </div>
     </div>



     <div class="col-xs-12 col-sm-4 form-group">

      <label for="publico" class="col-xs-12">Tipo de público:</label>
      <div class="checkbox col-xs-12">

        <label class="col-xs-12">
          <input type="checkbox" name="p[]"  value="Geral"/>Geral
        </label>

        
        <label class="col-xs-12">
          <input type="checkbox" name="p[]"  value="Instituicao"/>Instituição
        </label>

      </div>
    </div>

    <div class="col-xs-12">
      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="mes">Mês da Atividade:</label>
        <select class="form-control" name="mes" id="mes">
          <option></option>
          <option>JANEIRO</option>
          <option>FEVEREIRO</option>
          <option>MARÇO</option>
          <option>ABRIL</option>
          <option>MAIO</option>
          <option>JUNHO</option>
          <option>JULHO</option>
          <option>AGOSTO</option>
          <option>SETEMBRO</option>
          <option>OUTUBRO</option>
          <option>NOVEMBRO</option>
          <option>DEZEMBRO</option>
        </select>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="ano">Ano da Atividade:</label>
        <select class="form-control" name="ano" id="ano">
          <option></option>
          <option>2015</option>
          <option>2016</option>
          <option>2017</option>
          <option>2018</option>
          <option>2019</option>
          <option>2020</option>
          <option>2021</option>
          <option>2022</option>
          <option>2023</option>
          <option>2024</option>
          <option>2025</option>
          <option>2026</option>
          <option>2027</option>
        </select>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="data_inicial">Data inicial: </label><input class="form-control" type="text" name="data_inicial" id="data_inicial"/>
        <script type="text/javascript" src="js/external/jquery/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/ui.js"></script>
        <script type="text/javascript" src="js/datepicker-pt-BR.js"></script>
      </div>



      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="data_final">Data final: </label><input class="form-control" type="text" name="data_final" id="data_final"/>
        <script>
          $(function() {
            $( "#data_final" ).datepicker({
            });
          });
        </script>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="hora_inicial">Hora Inicial: </label><input class="form-control" type="time" name="hora_inicial" id="hora_inicial"/>
      </div>

      <div class="col-xs-6 col-sm-4 col-md-2 form-group">
        <label for="hora_final">Hora Final: </label><input class="form-control" type="time" name="hora_final" id="hora_final"/>
      </div>

    </div> <!-- fecha div 12 -->

    <div class="col-xs-12">
      <div class="col-xs-6 form-group">
        <label for="reg_responsavel">Responsável:</label><input class="form-control" placeholder="Funcionários responsáveis pelo evento" name="reg_responsavel" type="text" id="reg_responsavel" size="100" />
      </div>

      <div class="col-xs-6 form-group">
        <label for="proponente">Proponente:</label><input class="form-control" placeholder="Proponentes responsáveis pelo evento" name="proponente" type="text" id="proponente" size="100" />
      </div>
    </div>

    <div class="col-xs-12">
      <div class="col-xs-12 col-sm-6 form-group">
        <label for="pub_previsto">Público previsto: <font color="#999999"> ( Ex: 200, clique e utilize as setas -> <- )</font></label>

        <input type="range" name="pub_previsto" min="0" max="5000" value="0" id="pub_previsto" step="1"  onchange="showValue(this.value)" />
        <script type="text/javascript">
          function showValue(number)
          {
            document.getElementById("put").innerHTML = number;

          }
        </script>
        <span id="put">0</span>

      </div>

      <div class="col-xs-12 col-sm-6 form-group">
        <label for="pub_efetivo">Público efetivo: <font color="#999999"> ( Ex: 100, clique e utilize as setas -> <- )</font></label>

        <input type="range" name="pub_efetivo" min="0" max="5000" value="0" id="pub_efetivo" step="1"  onchange="showValue2(this.value)" />
        <script type="text/javascript">
          function showValue2(number)
          {
            document.getElementById("put2").innerHTML = number;

          }
        </script>
        <span id="put2">0</span>

      </div>
    </div> <!-- fecha div 12 -->

    <div class="col-xs-12">
      <div class="col-xs-12 form-group">
        <label for="imagem">Selecione imagens: <font color="#999999"> ( Imagens sobre o evento )</font></label><input name="imagem[]" type="file" id="imagem" multiple />
      </div>
      <div class="col-xs-12 form-group">
        <input type="submit" class="btn bgColor1 bgHover2 center-block" value="Salvar Registro" name="button"/>
      </div>
    </div>
  </form>


</div><!--fim container-->
</body>
</html>
</body>
</html>
<?php 
include ("footer.php");
?>



<?php 
	if (isset($_POST["button"])) {

    $reg_nome_ativ = mysqli_real_escape_string($mysqli,$_POST["reg_nome_ativ"]);
		$reg_breve_res = mysqli_real_escape_string($mysqli,$_POST["reg_breve_res"]);
		$tipo = mysqli_real_escape_string($mysqli,$_POST["tipo"]);
		$classificacao = mysqli_real_escape_string($mysqli,$_POST["classificacao"]);
		$mes = mysqli_real_escape_string($mysqli,$_POST["mes"]);
		$ano = mysqli_real_escape_string($mysqli,$_POST["ano"]);
		$data_inicial = mysqli_real_escape_string($mysqli,$_POST["data_inicial"]);
		$data_final = mysqli_real_escape_string($mysqli,$_POST["data_final"]);
		$hora_inicial = mysqli_real_escape_string($mysqli,$_POST["hora_inicial"]);
		$hora_final = mysqli_real_escape_string($mysqli,$_POST["hora_final"]);
		$reg_responsavel = mysqli_real_escape_string($mysqli,$_POST["reg_responsavel"]);
		$proponente = mysqli_real_escape_string($mysqli,$_POST["proponente"]);
		$pub_previsto = mysqli_real_escape_string($mysqli,$_POST["pub_previsto"]);
		$pub_efetivo = mysqli_real_escape_string($mysqli,$_POST["pub_efetivo"]);
		$outrolocal = mysqli_real_escape_string($mysqli,$_POST["outrolocal"]);

		// FAIXA, LOCAL E TIPO DE PUBLICO...
		$l = implode(",",$_POST['l']);
		
		$f = implode(",",$_POST['f']);
		
		$p = implode(",",$_POST['p']);
		
		// Imagem upload
			//INFO IMAGEM
		$file 		= $_FILES['imagem'];
		$numFile	= count(array_filter($file['name']));

			//PASTA
		$folder  = 'fotos/';

			//REQUISITOS
		$permite =  array('image/jpeg', 'image/png');
		$maxSize = 1024 * 1024 * 20;

			//MENSAGENS
		$msg 	  = array();
		$errorMsg = array(
			1 => 'Muitas imagens selecionadas, ultrapassando o limite de tamanho',
			2 => 'O arquivo ultrapassa o tamanho permitido',
			3 => 'O upload do arquivo foi feito parcialmente',
			4 => 'Não foi feito o upload do arquivo'
			);

		for ($i = 0; $i < $numFile; $i++){
			$name  = $file['name'][$i];
			$type  = $file['type'][$i];
			$size  = $file['size'][$i];
			$error = $file['error'][$i];
			$tmp   = $file['tmp_name'][$i];

			$extensao  = @end(explode('.', $name));
			$novo_nome = md5(time()).".$extensao";

			if ($error != 0)
				$msg[] = "<b>$name :</b>".$errorMsg[$error];
			else if (!in_array($type, $permite))
				$msg[] = "<b>$name :</b> Erro imagem não suportada!";
			else if ($size > $maxSize)
				$msg[] = "<b>$name :</b> Erro imagem ultrapassa limite permitido!";
			else{

				if(move_uploaded_file($tmp, $folder."/".$novo_nome))
					$msg[] = "<b>$name :</b> Desculpe ocorreu algum erro..";
			}

		}

    
	$select = $mysqli->query("SELECT * FROM registros");
		if ($select){
		$row = $select->num_rows;
		if($row == 0) {
			echo "<script> alert ('Algo deu errado!'); </script>";
		} else {
			$insert = $mysqli->query ("INSERT INTO registros (reg_nome_ativ, reg_breve_res, tipo, classificacao, mes, ano, data_inicial, data_final, hora_inicial, hora_final, reg_responsavel, proponente, pub_previsto, pub_efetivo, outrolocal, local, faixa, publico, imagem, data_img, iduser) VALUES ('$reg_nome_ativ', '$reg_breve_res', '$tipo', '$classificacao', '$mes', '$ano', '$data_inicial', '$data_final', '$hora_inicial', '$hora_final', '$reg_responsavel',  '$proponente', '$pub_previsto', '$pub_efetivo', '$outrolocal', '$l','$f', '$p', '$novo_nome', NOW(), '$idrec')");

			if ($insert) {
				echo "<script> alert ('Registrado com sucesso!'); location.href='registrado.php' </script>";
			} else {
				echo $mysqli->error;
			}
		}
	} else {
		echo $mysqli->error;
	}
}
?>


