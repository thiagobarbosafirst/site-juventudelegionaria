<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Conhe&ccedil;a</title>
<?php
include "css.php";
?>
</head>

<body>
<div id="fundo_paginas"> 
	<div id="geral_paginas" align="center">
	<br />
		<div id="conteudo">
			<div id="titulo_conteudo" align="left"><i class="icons">| </i> Agenda </div>
			<?php 
				if ($_GET['funcao'] != "detalhes") {
			?>
		
			
			<br />
			<br />
			
			<br />
			<br />
			<form action="" method="get">
				<label>Nome</label>
				<br />
				<input type="text" name="nome" id="nome" />
				<br />
				<label>Mensagem</label>
				<br />
				<textarea name="msg" id="msg" rows="5"></textarea>
				<br />
				<input type="submit" value="Enviar" />
				<input type="button" onclick="limpar();" />
			</form>
		
		  <?php
			}
			?>
		
			<?php
				if ($_GET['funcao'] == "detalhes"){
			?>	
			Acontecera o XV EJLM em Anapolis
		
			<center><strong><a href="javascript:history.back()"> </strong>voltar </a></center>
		
			<?php	
			}
			?>
		<!--<div class="row-fluid">
						<div class="b_col2">
						<h2>Calendar</h2>
        				<div id="calendar">
							<table summary="Calendar">
								<caption>
									<span style=" font-size:10px;">January 2010</span>
								</caption>
								<thead>
									<tr>
										<th abbr="Monday" scope="col" title="Monday">M</th>
										<th abbr="Tuesday" scope="col" title="Tuesday">T</th>
										<th abbr="Wednesday" scope="col" title="Wednesday">W</th>
										<th abbr="Thursday" scope="col" title="Thursday">T</th>
										<th abbr="Friday" scope="col" title="Friday">F</th>
										<th abbr="Saturday" scope="col" title="Saturday">S</th>
										<th abbr="Sunday" scope="col" title="Sunday">S</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<td colspan="3" id="prev" abbr="Des"><a href="#">&laquo; Des</a></td>
										<td class="pad">&nbsp;</td>
										<td abbr="Feb" colspan="3" id="next" class="pad"><a href="#">Feb &raquo;</a></td>
									 </tr>
								</tfoot>
								<tbody>
									  <tr>
										<td colspan="5" class="pad">&nbsp;</td>
										<td>1</td>
										<td>2</td>
									  </tr>
									  <tr>
										<td>3</td>
										<td>4</td>
										<td>5</td>
										<td>6</td>
										<td>7</td>
										<td>8</td>
										<td>9</td>
									  </tr>
									  <tr>
										<td>10</td>
										<td>11</td>
										<td>12</td>
										<td>13</td>
										<td>14</td>
										<td>15</td>
										<td id="now">16</td>
									  </tr>
									  <tr>
										<td>17</td>
										<td>18</td>
										<td>19</td>
										<td>20</td>
										<td>21</td>
										<td>22</td>
										<td>23</td>
									  </tr>
									  <tr>
										<td>24</td>
										<td>25</td>
										<td>26</td>
										<td>27</td>
										<td>28</td>
										<td >29</td>
										<td>30</td>
									  </tr>
										<tr>
											<td>31</td>
											<td colspan="6"></td>
										 </tr>
								</tbody>
							</table>
        				</div><!--calendar->
					</div><!--b_col2->
				</div><!--row-fluid-->
			
			</div><!--conteudo-->
		<div style="clear:both"></div>
		<br  />
	</div><!--geral_paginas-->
</div><!--fundo_pagina-->



</body>
</html>
