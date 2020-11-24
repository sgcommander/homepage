<?php

error_reporting(E_ALL);

/**
 * Vista del index
 *
 * @author
 * @package views
 * @since 27/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase que se encarga de asignar las variables en
 * las vistas y devolver el HTML formateado
 *
 * @author
 * @since 21/01/2009
 */
require_once('../libs/View.php');

/**
 * Vista del index
 *
 * @access public
 * @author
 * @package views
 * @since 27/01/2009
 */
class IndexView extends View
{

    public function show()
    {
        //Cargamos la plantilla
		$this->tpl->loadTemplateFile('index.tpl');
		
		//Variables
		$this->tpl->setVariable('TITULO', 'Stargate Galactic Commander: Juego online');
		$this->tpl->setVariable('IMGFOLDER', $this->config->get('imgFolder'));
		//Login
		$this->tpl->setVariable('_USUARIO', _('Nombre de usuario'));
		$this->tpl->setVariable('_CONTRASENA', _('Contrase&#241;a'));
		$this->tpl->setVariable('_ENTRAR', _('Entrar'));
		$this->tpl->setVariable('_OLVIDASTEPASS', _('¿Olvidaste tu contrase&#241;a?'));
		$this->tpl->setCurrentBlock('tServer');
		$servers = $this->config->get('servers');
		for($i=0;$i<count($servers);$i++){
			$this->tpl->setVariable('SERVERNAME', 'Universo '. ($i+1));
			$this->tpl->setVariable('SERVERURL', (array_keys($servers)[$i]));
			$this->tpl->parseCurrentBlock();
		}
		//Menu
		$this->tpl->setVariable('BOTON1', _('Registrarse'));
		$this->tpl->setVariable('BOTON2', _('Acerca de'));
		$this->tpl->setVariable('BOTON3', _('Foro'));
		$this->tpl->setVariable('BOTON4', _('Ayuda'));
		$this->tpl->setVariable('BOTON5', _('Imágenes'));
		$this->tpl->setVariable('BOTON6', _('Blog'));
		$this->tpl->setVariable('BOTON7', _('Bugs'));
		//Titulos
		$this->tpl->setVariable('BOTON1TITULO', _('Formulario de registro'));
		$this->tpl->setVariable('BOTON2TITULO', _('Acerca del juego'));
		$this->tpl->setVariable('BOTON3TITULO', _('Foro del juego'));
		$this->tpl->setVariable('BOTON4TITULO', _('Ayuda del juego'));
		$this->tpl->setVariable('BOTON5TITULO', _('Imágenes del juego'));
		$this->tpl->setVariable('BOTON6TITULO', _('Blog de desarrollo'));
		$this->tpl->setVariable('BOTON7TITULO', _('Reporte de bugs'));
		$this->tpl->setVariable('BOTON8TITULO', _('Términos & Condiciones'));
		$this->tpl->setVariable('BOTON9TITULO', _('Aviso legal'));
		$this->tpl->setVariable('BOTON10TITULO', _('Reglas del juego'));
		$this->tpl->setVariable('BOTON11TITULO', _('Créditos'));

		//Pie
		$this->tpl->setVariable('BOTON8', _('T&C'));
		$this->tpl->setVariable('BOTON9', _('Aviso legal'));
		$this->tpl->setVariable('BOTON10', _('Reglas'));
		$this->tpl->setVariable('BOTON11', _('Créditos'));
        
        //Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
    public function acercade()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('acercade.tpl');
		
		//Idioma
		$this->tpl->setVariable('_QUEESSGCOMMANDER', _('¿Qué es Stargate: Galactic Commander?'));
		$this->tpl->setVariable('_TEXTOQUEES', _('Stargate: Galactic Commander es un juego online totalmente <b>gratuito</b> (sin cuentas premium ni ventajas de pago) basado en la serie de televisión Stargate en el que competirás contra cientos de jugadores a través de tu navegador de internet, reviviendo las mejores batallas de la serie.'));
		$this->tpl->setVariable('_CARACTERISTICAS', _('Características'));
		$this->tpl->setVariable('_SOBRE1', _('Puedes jugar a Stargate: Galactic Commander directamente desde tu navegador sin ninguna descarga.'));
		$this->tpl->setVariable('_SOBRE2', _('Ocho razas, Tau\'ri, Goa\'uld, Jaffa, Asgard, Atlantis, Wraith, Ori o Replicantes y muchas unidades extra del universo Stargate, cada raza tiene sus propias unidades y características únicas, elige la que mejor se adapte a tu juego. Para conocer mas acerca de ellas usa nuestra ayuda del juego.'));
		$this->tpl->setVariable('_SOBRE3', _('Explora planetas, conquístalos, recolecta recursos y construye tropas y naves para expandir tu dominio por la galaxia.'));
		$this->tpl->setVariable('_SOBRE4', _('Crea alianzas, comercia y declara guerras a otras alianzas, necesitaras compañeros para derrotar a tus enemigos.'));
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function imagenes()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('imagenes.tpl');
		
		//Idioma
		$this->tpl->setVariable('_SCREENSHOT1', _('Construcción de tropas wraith'));
		$this->tpl->setVariable('_SCREENSHOT2', _('Vista de galaxia wraith'));
		$this->tpl->setVariable('_SCREENSHOT3', _('Construcción de tropas jaffa'));
		$this->tpl->setVariable('_SCREENSHOT4', _('Vista principal jaffa'));
		$this->tpl->setVariable('_SCREENSHOT5', _('Firmas y logos de atlantis'));
		$this->tpl->setVariable('_SCREENSHOT6', _('Requisitos de tropas atlantis'));
		$this->tpl->setVariable('_SCREENSHOT7', _('Construcción de naves asgard'));
		$this->tpl->setVariable('_SCREENSHOT8', _('Mejoras ori'));
		$this->tpl->setVariable('_SCREENSHOT9', _('Firmas y logos goa\'uld'));
		$this->tpl->setVariable('_SCREENSHOT10', _('Vista principal replicantes'));
		$this->tpl->setVariable('_SCREENSHOT11', _('Ranking replicantes'));
		$this->tpl->setVariable('_SCREENSHOT12', _('Ranking atlantis'));
		$this->tpl->setVariable('_SCREENSHOT13', _('Mejoras goa\'uld'));
		$this->tpl->setVariable('_SCREENSHOT14', _('Mejoras tau\'ri'));
		$this->tpl->setVariable('_SCREENSHOT15', _('Construcción de tropas ori'));
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function terminos()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('terminos.tpl');
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function creditos()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('creditos.tpl');
		
		//Idioma
		$this->tpl->setVariable('_CREADORES', _('Creadores'));
		$this->tpl->setVariable('_AGRADECIMIENTOS', _('Agradecimientos'));
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function legal()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('legal.tpl');
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function reglas()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('reglas.tpl');
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function registro()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('registro.tpl');
		
		//Idioma
		$this->tpl->setVariable('_USUARIO', _('Nombre de usuario'));
		$this->tpl->setVariable('_EMAIL', _('E-mail'));
		$this->tpl->setVariable('_CONTRASENA', _('Contrase&#241;a'));
		$this->tpl->setVariable('_REPETIRCONTRASENA', _('Repetir contrase&#241;a'));
		$this->tpl->setVariable('_SERVIDOR', _('Servidor'));
		$this->tpl->setVariable('_RAZA', _('Raza'));
		$this->tpl->setVariable('_ENVIAR', _('Enviar'));
		$this->tpl->setVariable('_ACEPTOTERMINOS', _('Acepto las reglas y los términos y condiciones'));
		$this->tpl->setVariable('_COMPROBARDISPONIBILIDAD', _('Comprobar disponibilidad'));
		$this->tpl->setVariable('_SELECCIONEUNIVERSO', _('Seleccione universo'));
		$this->tpl->setVariable('_SELECCIONERAZA', _('Seleccione raza'));

		$this->tpl->setCurrentBlock('tServer');
		$servers = $this->config->get('servers');
		for($i=0;$i<count($servers);$i++){
			$this->tpl->setVariable('SERVERNAME', 'Universo '. ($i+1));
			$this->tpl->setVariable('SERVERURL', (array_keys($servers)[$i]));
			$this->tpl->parseCurrentBlock();
		}
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function equipo()
    {
    	//Cargamos la plantilla
		$this->tpl->loadTemplateFile('equipo.tpl');
		
		//Idioma
		$this->tpl->setVariable('_DESARROLLO', _('Desarrollo'));
		$this->tpl->setVariable('_ADMINISTRADOR', _('Administrador'));
		$this->tpl->setVariable('_EMAIL', _('E-mail'));
		$this->tpl->setVariable('_UNIVERSO', _('Universo'));
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
    }
    
	public function captcha($key)
    {
		$captcha = imagecreatefromgif('./images/bgcaptcha.gif');
		$colText = imagecolorallocate($captcha, 0, 0, 0);
		imagestring($captcha, 5, 16, 7, $key, $colText);
		header("Content-type: image/gif");
		imagegif($captcha);	
    }
} /* end of class IndexView */

?>