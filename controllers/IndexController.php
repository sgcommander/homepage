<?php

error_reporting(E_ALL);

/**
 * Controlador de la pagina de inicio
 *
 * @author
 * @package controllers
 * @since 27/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Controlador base del que heredan el resto de
 * controladores
 *
 * @author
 * @since 21/01/2009
 */
require_once('../libs/ControllerBase.php');

/* user defined includes */
// section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED1-includes begin
require_once('../views/IndexView.php');
// section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED1-includes end

/* user defined constants */
// section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED1-constants begin
// section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED1-constants end

/**
 * Controlador de la pagina de inicio
 *
 * @access public
 * @author
 * @package controllers
 * @since 27/01/2009
 */
class IndexController
    extends ControllerBase
{
    public function index()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->show();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function acercade()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->acercade();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function imagenes()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->imagenes();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function terminos()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->terminos();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function creditos()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->creditos();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function legal()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->legal();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function reglas()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->reglas();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function registro()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->registro();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
	public function equipo()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->equipo();
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
    
    public function peticionRegistro(){
    	if(array_key_exists('tmptxt', $_SESSION) && $_SESSION['tmptxt'] == $_REQUEST['registroCaptcha']){
            $servers = Config::singleton()->get('servers');

	    	$ch = curl_init($servers[$_REQUEST['registroServidor']].'/registro.php');
			$encoded = '';
			
			$encoded .= 'controlador='.urlencode('Registro').'&';
			$encoded .= 'accion='.urlencode('registro').'&';
			$encoded .= 'usuario='.urlencode($_REQUEST['registroUsuario']).'&';
			$encoded .= 'email='.urlencode($_REQUEST['registroEmail']).'&';
			$encoded .= 'pass='.urlencode($_REQUEST['registroPass']).'&';
			$encoded .= 'idRaza='.urlencode($_REQUEST['registroRaza']);
	
			//Decimos que la peticion es de tipo post
			curl_setopt($ch, CURLOPT_POST, 1);
			
			//Indicamos los campos a enviar
			curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
			
			//La cabecera
			curl_setopt($ch, CURLOPT_HEADER, 0);
			
			//Ejecutamos la peticion
			$result = curl_exec($ch);
			
			//Cerramos la conexion
			curl_close($ch);
    	}
    	else
    		echo 7;
    }
    
	public function comprobarUsuario(){
        $servers = Config::singleton()->get('servers');
    	$ch = curl_init($servers[$_REQUEST['servidor']].'/registro.php');
		$encoded = '';
		
		$encoded .= 'controlador='.urlencode('Registro').'&';
		$encoded .= 'accion='.urlencode('comprobarUsuario').'&';
		$encoded .= 'usuario='.urlencode($_REQUEST['usuario']);

		//Decimos que la peticion es de tipo post
        curl_setopt($ch, CURLOPT_POST, 1);
		
		//Indicamos los campos a enviar
		curl_setopt($ch, CURLOPT_POSTFIELDS,  $encoded);
		//La cabecera
		curl_setopt($ch, CURLOPT_HEADER, 0);

		//Ejecutamos la peticion
        $result = curl_exec($ch);

		//Cerramos la conexion
		curl_close($ch);
    }
    
	public function captcha()
    {
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 begin
        //Generamos el captcha
        $key='';
        $pattern = "1234567890abcdefghijklmnopqrstuvwxyz";
	    for($i=0;$i<8;$i++) {
	      $key .= $pattern{rand(0,35)};
	    }
	    
	    //Lo guardamos en session
	    $_SESSION['tmptxt'] = $key;
	    
        //Pasamos los datos a la vista
        $this->view = new IndexView();
        $this->view->captcha($key);
        // section 127-0-1-1-3aadfcf2:11f15349efc:-8000:0000000000000ED3 end
    }
} /* end of class IndexController */

?>
