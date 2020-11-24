<?php

error_reporting(E_ALL);

/**
 * Modelo base del que heredan el resto de modelos
 *
 * @author
 * @package libs
 * @since 21/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * Clase que genera una conexión a la BBDD
 *
 * @author
 * @since 23/01/2009
 */
require_once('../libs/SPDO.php');

/* user defined includes */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001334-includes begin
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001334-includes end

/* user defined constants */
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001334-constants begin
// section 127-0-1-1--6109fbe7:11efae96127:-8000:0000000000001334-constants end

/**
 * Modelo base del que heredan el resto de modelos
 *
 * @abstract
 * @access public
 * @author
 * @package libs
 * @since 21/01/2009
 */
abstract class ModelBase
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : ModelBase

    // --- ATTRIBUTES ---

    /**
     * Variable SPDO
     *
     * @access protected
     * @since 26/01/2009
     */
    protected $db = null;

    // --- OPERATIONS ---

    /**
     * Constructor de la clase
     *
     * @access public
     * @author
     * @return mixed
     * @since 21/01/2009
     */
    public function ModelBase()
    {
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000134D begin
        $this->db = SPDO::singleton();
        // section 127-0-1-1--6109fbe7:11efae96127:-8000:000000000000134D end
    }

} /* end of abstract class ModelBase */

?>