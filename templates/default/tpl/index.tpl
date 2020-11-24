<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>{TITULO}</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" type="text/css" href="./estilos/index.css" />
		<link rel="stylesheet" type="text/css" href="./estilos/milkbox.css" />
		<link rel="stylesheet" href="./js/formcheck/theme/classic/formcheck.css" type="text/css" media="screen" />
		<link href="./estilos/mobile.css" rel="stylesheet" type="text/css" media="handheld, only screen and (max-device-width: 480px)" />
		<script type="text/javascript" src="./js/mootools/mootools-1.2.4-core-yc.js"></script>
		<script type="text/javascript" src="./js/mootools/mootools-1.2.4.4-more.js"></script>
		<script type="text/javascript" src="./js/milkbox.js"></script>
		<script type="text/javascript" src="./js/formcheck/lang/es.js"></script>
		<script type="text/javascript" src="./js/formcheck/formcheck.js"></script>
		<script type="text/javascript" src="./js/index.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  		<meta name="viewport" content="width=device-width,initial-scale=1">
	</head>
	<body>
		<div id="contenedor">
			<div id="cabecera">
				<div id="cabeceraCentro">
					<div id="login">
						<form action="http://localhost:8889/index.php" method="post" id="frmLogin">
							<input type="hidden" name="controlador" value="Acceso" />
							<input type="hidden" name="accion" value="login" />
							<div><input type="text" name="usuario" id="usuario" title="{_USUARIO}" /></div>
							<div><input type="password" name="pass" id="pass" title="{_CONTRASENA}" autocomplete="on" /></div>
							<div>
							<select name="servidor" id="servidor">
								<!-- BEGIN tServer -->
								<option value="{SERVERURL}/index.php">{SERVERNAME}</option>
								<!-- END tServer -->
							</select>
							</div>
							<div><input type="submit" id="topsubmit" value="{_ENTRAR}" /></div>
							<div id="olvidaste">{_OLVIDASTEPASS}</div>
						</form>
					</div>
					<div id="social">
						<div>
							<a href="http://www.facebook.com/pages/Stargate-Galactic-Commander/105013099531445" target="_blank"><img src="{IMGFOLDER}social/facebook.png" alt="Facebook" title="Facebook" border="0" /></a>
						</div>
						<div>
							<a href="http://twitter.com/sgcommander" target="_blank"><img src="{IMGFOLDER}social/twitter.png" alt="Twitter" title="Twitter" border="0" /></a>
						</div>
						<div>
							<a href="http://www.tuenti.com/#m=Page&func=index&page_key=1_6_59824153" target="_blank"><img src="{IMGFOLDER}social/tuenti.png" alt="Tuenti" title="Tuenti" border="0" /></a>
						</div>
						<div>
							<a href="https://plus.google.com/107323997810311904446/posts?hl=es" target="_blank"><img src="{IMGFOLDER}social/googleplus.png" alt="Facebook" title="Google+" border="0" /></a>
						</div>
						<div>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
							">
							<!--<input type="image" src="https://www.paypal.com/es_ES/ES/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">-->
							<input type="image" src="./images/donar.png" border="0" name="submit" alt="PayPal. La forma rápida y segura de pagar en Internet.">
							<img alt="Paypal" border="0" src="https://www.paypal.com/es_ES/i/scr/pixel.gif" width="1" height="1">
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="centro">
				<div id="mensaje">Nueva versi&#243;n beta abierta del juego sin l&#237;mite de jugadores ¿a que esperas para registrarte?</div>
				<div id="menu">
					<div id="loaderImagenes">
						<img src="./images/boton1_over.jpg" alt="Boton1"/>
						<img src="./images/boton2_over.jpg" alt="Boton2"/>
						<img src="./images/boton3_over.jpg" alt="Boton3"/>
						<img src="./images/boton4_over.jpg" alt="Boton4"/>
						<img src="./images/boton5_over.jpg" alt="Boton5"/>
						<img src="./images/boton6_over.jpg" alt="Boton6"/>
						<img src="./images/boton7_over.jpg" alt="Boton7"/>
					</div>
					<div id="boton1" title="{BOTON1TITULO}">{BOTON1}</div>
					<div id="boton2" title="{BOTON2TITULO}">{BOTON2}</div>
					<div id="boton3" title="{BOTON3TITULO}">{BOTON3}</div>
					<div id="boton4" title="{BOTON4TITULO}">{BOTON4}</div>
					<div id="boton5" title="{BOTON5TITULO}">{BOTON5}</div>
					<div id="boton6" title="{BOTON6TITULO}">{BOTON6}</div>
					<div id="boton7" title="{BOTON7TITULO}">{BOTON7}</div>
				</div>
				<div id="publicidad">
				</div>
				
				<div id="contenido">
					<div id="contenidoCabecera">
						<div id="titulo">Titulo</div>
						<img src="{IMGFOLDER}close.png" alt="{_CERRAR}" id="botonCerrar" />
					</div>
					<div id="contenidoContenedor">
						<div id="preloader"></div>
						<form action="index.php" id="frmRegistro" method="get">
							<div id="interior"></div>
						</form>
					</div>
					<div id="contenidoPie"></div>
				</div>
			</div>
			<div id="pie">
				<div id="pieMenu">
					<div id="boton8" title="{BOTON8TITULO}">{BOTON8}</div>
					<div id="boton9" title="{BOTON9TITULO}">{BOTON9}</div>
					<div id="boton10" title="{BOTON10TITULO}">{BOTON10}</div>
					<div id="boton11" title="{BOTON11TITULO}">{BOTON11}</div>
				</div>
				<div id="copyright">
					
				</div>
			</div>
		</div>
	</body>
</html>
