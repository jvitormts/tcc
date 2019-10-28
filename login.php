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
      <div id="cadastrar">
        <form method="post" action="login.php"> 
          <h1>Login</h1> 
          
           <p> 
            <label for="email">E-mail:</label>
            <input id="email" name="email" required="required" type="text" placeholder="digite seu e-mail"/> 
          </p>
          
          <p> 
            <label for="senha">Senha:</label>
            <input id="senha" name="senha" required="required" type="password" placeholder="digite sua senha"/>
          </p>
          
          <p> 
            <input type="submit" name="submit" value="Entrar"/> 
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
        if(isset($_POST["submit"])){        


        	mysql_connect("localhost","root","") or die(mysql_error());
	 		mysql_select_db("etec_tcc");
	 		$login=$_POST["email"];
          	$senha=md5($_POST["senha"]);

          $query="SELECT * FROM g2_anunciantes WHERE email='$login' AND senha='$senha'";
          $result=mysql_query($query) or die(mysql_error());

         if (mysql_num_rows($result)) {

         		$dados=mysql_fetch_array($result);
         		$email=$dados["email"];
         		$_SESSION["email"]=$email;


            print("<script>alert(\"Login realizado com sucesso. Bem vindo $login\")</script>");
            print("<meta http-equiv=\"refresh\" content=\"0;index.html\">");
            }
          else
            {
            print("<script>alert(\"Falha no login. Usuário ou senha inválidos.\")</script>");
            print("<meta http-equiv=\"refresh\" content=\"0\">");
            }
          }
      ?>

</html>