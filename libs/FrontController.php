<?php

error_reporting(E_ALL);

/**
 * Controlador principal por el que pasan todos los
 * datos
 *
 * @author
 * @package libs
 * @since 26/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Recibe una matriz a la cual le aplica los filtros
 * especificos para evitar la mayoria de inyecciones
 *
 * @author
 * @since 27/01/2009
 */
require_once('libs/Asegurar.php');

/**
 * Clase de configuracion para el resto de clases
 *
 * @author
 * @see Uso:
 * @since 26/01/2009
 */
require_once('libs/Config.php');

/* user defined includes */
// section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB4-includes begin
/**
 * Clase con variadas funciones para dar soporte.
 * @author
 * @since 27/01/2009
 */
require_once('libs/Funciones.php');

/**
 * Clase base para la creacion de controladores
 * @author
 * @since 27/01/2009
 */
require_once('libs/ControllerBase.php');

/**
 * Clase base para la creacion de modelos
 * @author
 * @since 27/01/2009
 */
require_once('libs/ModelBase.php');

/**
 * Clase que se encarga de asignar las variables en
 * las vistas y devolver el HTML formateado
 *
 * @author
 * @since 21/01/2009
 */
require_once('libs/View.php');

/**
 * Archivo de constantes
 */
require_once('constants.php');

// section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB4-includes end

/* user defined constants */
// section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB4-constants begin
// section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB4-constants end

/**
 * Controlador principal por el que pasan todos los
 * datos
 *
 * @access public
 * @author
 * @package libs
 * @since 26/01/2009
 */
class FrontController
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : FrontController    // generateAssociationEnd : FrontController

    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Metodo principal
     *
     * @access public
     * @author
     * @since 26/01/2009
     */
    public static function main()
    {
        // section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB5 begin
        //Incluimos el archivo de configuracion
	require 'config.php';
	
	//Limpiamos el array de entrada
	new Asegurar($_REQUEST);

	//Con el objetivo de no repetir nombre de clases, nuestros controladores
	//terminaran todos en Controller. Por ej, la clase controladora Items, sera ItemsController

	//Formamos el nombre del Controlador
	if(! empty($_REQUEST['controlador']))
		$controllerName = $_REQUEST['controlador'] . 'Controller';
	else
		$controllerName='IndexController';

	//Lo mismo sucede con las acciones
	if(! empty($_REQUEST['accion']))
		$actionName = $_REQUEST['accion'];
	else
		$actionName='index';
		
	/**
	*	Aqui se deben poner las operaciones que quieres que se realicen en cada carga de la web
	*
	*	Ejemplos:
	*		- Control de acceso
	**/
	
	//Construimos el path hacia el controlador seleccionado
	$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';
		
	//Incluimos el fichero que contiene nuestra clase controladora solicitada	
	if(is_file($controllerPath))
	      require $controllerPath;
	else
	      die('El controlador no existe - 404 not found');
	
	//Si no existe la clase que buscamos y su accion, tiramos un error 404
	//in_array($actionName, get_class_methods($controllerName)); //Esta es otroa opcion para el if
	if (!method_exists($controllerName, $actionName)) 
	{
		trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
		return false;
	}		
	//Si todo va bien creamos una instancia del controlador y llamamos a la accion
	$controller = new $controllerName();
	$controller->$actionName();
        // section 127-0-1-1--5051beab:11f139ff8b5:-8000:0000000000000EB5 end
    }

} /* end of class FrontController */

?>
