<?php

error_reporting(E_ALL);

/**
 * Controlador base del que heredan el resto de
 * controladores
 *
 * @author
 * @package libs
 * @since 21/01/2009
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
require_once('libs/View.php');

/* user defined includes */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000130A-includes begin
// section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000130A-includes end

/* user defined constants */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000130A-constants begin
// section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000130A-constants end

/**
 * Controlador base del que heredan el resto de
 * controladores
 *
 * @abstract
 * @access public
 * @author
 * @package libs
 * @since 21/01/2009
 */
abstract class ControllerBase
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : ControllerBase

    // --- ATTRIBUTES ---

    /**
     * Vista del controlador
     *
     * @access protected
     * @since 23/01/2006
     */
    protected $view = null;

    // --- OPERATIONS ---

    /**
     * Constructor de la clase
     *
     * @access public
     * @author
     * @return mixed
     * @since 23/01/2009
     */
    public function ControllerBase()
    {
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000132A begin
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000132A end
    }

} /* end of abstract class ControllerBase */

?>