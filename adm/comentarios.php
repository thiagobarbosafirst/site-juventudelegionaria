<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contato</title>
<?php
include "css.php";
?>
</head>

<body>
<div id="fundo_paginas"> 
	<div id="geral_paginas" align="center">
		<br />
		<div id="conteudo">
			<div id="titulo_conteudo" align="left"><i class="icons">| </i> Contato</div>
		<br />	
			<div class="control-group">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Nome</label>
					<div class="controls"> 
						<input name="nome" type="text" id="nome"  placeholder="Escreva seu nome aqui" class="span6"/>
						<a class="close ip" onclick="limparCampo('nome')">&times;</a>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">E-mail</label>
					<div class="controls">
						<input type="text" id="email" name="email" class="span4"/>
						<a class="close ip" onclick="limparCampo('email')">&times;</a>
					</div>
				</div>	
				<div class="control-group">	
					<label class="control-label">Cidade/Estado</label>
					<div class="controls"> 
						<input type="text" id="cidade" name="cidade" class="span4"/>
						<a class="close ip" onclick="limparCampo('cidade')">&times;</a>
					</div>
				</div>	
				<div class="control-group">	
					<label class="control-label">Mensagem</label>
					<div class="controls">
						<textarea id="mensagem" name="mensagem" class="span6"> </textarea>
						<a class="close ip" onclick="limparCampo('mensagem')">&times;</a>
					</div>
				</div>	
				<div class="control-group">
					<div class="controls">
						<button class="btn-small" id="btn-enviar-mensagem" >Enviar</button>
						<button class="btn-small" id="btn-cancelar-mensagem" > Limpar Campos </button>
					</div>
				</div>			
			</form>	
			</div>	
		</div><!--conteudo-->
		<div style="clear:both"></div>
		<br  />
	</div><!--geral_paginas-->
</div><!--fundo_pagina-->



</body>

</html>
