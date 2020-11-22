<?php

error_reporting(E_ALL);

/**
 * Clase que se encarga de asignar las variables en
 * las vistas y devolver el HTML formateado
 *
 * @author
 * @package libs
 * @since 21/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001350-includes begin
require_once('libs/Sigma.php');
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001350-includes end

/* user defined constants */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001350-constants begin
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001350-constants end

/**
 * Clase que se encarga de asignar las variables en
 * las vistas y devolver el HTML formateado
 *
 * @abstract
 * @access public
 * @author
 * @package libs
 * @since 21/01/2009
 */
abstract class View
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Plantilla de la vista
     *
     * @access protected
     * @since 27/01/2009
     */
    protected $tpl = null;

    /**
     * Variable de configuracion para la plantilla
     *
     * @access protected
     * @since 02/02/2009
     * @var Config
     */
    protected $config = null;

    // --- OPERATIONS ---

    /**
     * Constructor de la clase
     *
     * @access public
     * @author
     * @return mixed
     * @since 09/01/2009
     */
    public function View()
    {
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001355 begin
        //Traemos una instancia de nuestra clase de configuracion.
		$this->config = Config::singleton();
                
		//Indicamos la ruta de las plantillas
		$this->tpl = new HTML_Template_Sigma($this->config->get('tplFolder'),$this->config->get('tplCacheFolder'));
		
		//No errors are expected to happen here
		$this->tpl->setErrorHandling(PEAR_ERROR_DIE);
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001355 end
    }

    /**
     * Actualiza el JS de los recursos a peticion
     * de una vista
     *
     * @access protected
     * @author
     * @param  Integer primario
     * @param  Integer secundario
     * @param  Integer energia
     * @return mixed
     * @since 15/01/2009
     */
    protected function actualizarRecursos($primario, $secundario, $energia = null)
    {
        // section 127-0-1-1--b8a058d:126326ed4d9:-8000:0000000000001883 begin
        //Cargamos la plantilla
		$this->tpl->loadTemplateFile('actualizar.tpl');
		
		if($primario!=null)
			$this->tpl->setVariable('RECURSOPRICANT',$primario);
		if($secundario!=null)
			$this->tpl->setVariable('RECURSOSECCANT',$secundario);
		if($energia!=null)
			$this->tpl->setVariable('RECURSOENECANT',$energia);
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
        // section 127-0-1-1--b8a058d:126326ed4d9:-8000:0000000000001883 end
    }

    /**
     * Actualiza el JS de las producciones a peticion
     * de una vista
     *
     * @access protected
     * @author
     * @param  Integer primario
     * @param  Integer secundario
     * @param  Integer energia
     * @return mixed
     * @since 15/01/2010
     */
    protected function actualizarProducciones($primario, $secundario = null, $energia = null)
    {
        // section 127-0-1-1--b8a058d:126326ed4d9:-8000:000000000000188F begin
        //Cargamos la plantilla
		$this->tpl->loadTemplateFile('actualizar.tpl');
		
		if($primario!=null)
			$this->tpl->setVariable('RECURSOPRIPRO',$primario);
		if($secundario!=null)
			$this->tpl->setVariable('RECURSOSECPRO',$secundario);
		if($energia!=null)
			$this->tpl->setVariable('RECURSOENEPRO',$energia);
		
		//Finalmente, mostramos la plantilla.
		$this->tpl->show();
        // section 127-0-1-1--b8a058d:126326ed4d9:-8000:000000000000188F end
    }

} /* end of abstract class View */

?>