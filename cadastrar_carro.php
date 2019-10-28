<!DOCTYPE HTML>
<html>

<head>
	<title>Flexin Motors</title>
	<link href="css/cadastro.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.ico" >
</head>

<body>
	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.html">
					<div class="container">
			<span class="textL"><i>Flexin Motor$</i></span>
		</div>
	</a>
				</div>
				<div class="cart">
					<ul class="ph-no">
						<li class="item  first_item">
							<div class="item_html">
								
							</div>
						</li>
					</ul>
					
					<div class="menu-main">
						<ul class="dc_css3_menu">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="servicos.html">Shop</a>
							</li>
							<li class="active">
								<a href="cadastrar.php">Cadastrar</a>
							</li>
							<li>
								<a href="login.php">Login</a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<hr>
	<div class="header-bottom">
		<div class="wrap">
			<div class="single">
				<div class="heading">
					<div class="containe" >

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastrocarro">
        <form method="post" action=""> 
          <h1>Cadastro Veículo</h1> 
          
          <p> 
            <label for="id_placa">Placa:</label>
            <input id="id_placa" name="id_placa" required="required" type="text" placeholder="digite a placa"/>
          </p>

          <p> 
            <label for="id_cpf">CPF:</label>
            <input id="id_cpf" name="id_cpf" required="required" type="text" placeholder="digite seu CPF"/>
          </p>
          
          <p> 
            <label for="marca">Marca:</label>
            <input id="marca" name="marca" required="required" type="text" placeholder="digite a marca"/> 
          </p>
          
          <p> 
            <label for="modelo">Modelo:</label>
            <input id="modelo" name="modelo" required="required" type="text" placeholder="digite o modelo"/>
          </p>

          <p> 
            <label for="anofab">Ano de fabricação:</label>
            <input id="anofab" name="anofab" required="required" type="text" placeholder="digite o ano de fabricação"/>
          </p>

          <p> 
            <label for="anomod">Ano do modelo:</label>
            <input id="anomod" name="anomod" required="required" type="text" placeholder="digite o ano do modelo"/>
          </p>

          <p> 
            <label for="preco">Preço:</label>
            <input id="preco" name="preco" required="required" type="text" placeholder="digite o preço do veículo"/>
          </p>

          <p> 
            <label for="situacao">Situação:</label>
            <input id="situacao" name="situacao" required="required" type="text" placeholder="digite a situação do veículo"/>
          </p>
         

          <p> 
            <input type="submit" name="submit" value="Cadastrar"/> 
          </p>
          
        </form>
      </div>
    </div>
  </div> 
</div>
</div>
<br><br>

							<div class="clear"> </div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Nossa empresa</h3>
						<div class="f_menu">
							<ul>
								<li>About your Company Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
								<li>Terms &amp; conditions Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="call_info">
						<p class="txt_3">Contato:</p>
						<p class="txt_4">(12)3333-3333</p>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Redes Sociais</h3>
						<ul class="follow_icon">
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon1.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon2.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon3.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon4.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon5.png" alt="">
								</a>
							</li>
						</ul>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="wrap">
			<p>Flexin Motors &copy; 2019</p>
		</div>
	</div>
</body>


<?php 

	if (isset($_POST["submit"])) {
	 	$id_placa=$_POST["id_placa"];
	 	$id_cpf=$_POST["id_cpf"];
	 	$marca=$_POST["marca"];
	 	$modelo=$_POST["modelo"];
	 	$anofab=$_POST["anofab"];
	 	$anomod=$_POST["anomod"];
	 	$preco=$_POST["preco"];
	 	$situacao=$_POST["situacao"];

	 		mysql_connect("localhost","root","") or die(mysql_error());
	 		mysql_select_db("etec_tcc");

	 	$query="INSERT INTO g2_veiculos values ('$id_placa','$id_cpf','$marca','$modelo','$anofab','$anomod','$preco','$situacao')";
	 	
	 	mysql_query($query) or die (mysql_error());
	 	
	 	if (mysql_query($query))

	 	{
	 	  print("<script>alert(\"Cadastro não realizado com sucesso.\")</script>");
              }
            else
              {
              print("<script>alert(\"Cadastro realizado com sucesso.\");window.location.href='cadastrar_carro.php';</script>");
              }
	 } 

?>


</html>