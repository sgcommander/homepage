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
						<form action="{DEFAULTSERVERURL}/index.php" method="post" id="frmLogin">
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
					</div>
				</div>
			</div>
			<div id="centro">
				<div id="mensaje"></div>
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
