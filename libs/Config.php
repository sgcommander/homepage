<?php

error_reporting(E_ALL);

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E8A-includes begin
// section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E8A-includes end

/* user defined constants */
// section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E8A-constants begin
// section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E8A-constants end

/**
 * Clase de configuracion para el resto de clases
 *
 * @access public
 * @author
 * @package libs
 * @see Uso:
 * @since 26/01/2009
 */
class Config
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Variables de configuracion
     *
     * @access private
     * @since 26/01/2009
     * @var Integer
     */
    private $vars = null;

    /**
     * Instancia de la clase
     *
     * @access private
     * @since 26/01/2009
     * @var Integer
     */
    private static $instancia = null;

    // --- OPERATIONS ---

    /**
     * Constructor de la clase
     *
     * @access private
     * @author
     * @return mixed
     * @since 26/01/2009
     */
    private function Config()
    {
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EA3 begin
        $this->vars = array();
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EA3 end
    }

    /**
     * Devuelve el valor de una variable de configuracion
     *
     * @access public
     * @author
     * @param  String name
     * @param  String value
     * @since 26/01/2009
     */
    public function set($name, $value = null)
    {
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EAB begin
        if(!isset($this->vars[$name]))
        {
            $this->vars[$name] = $value;
        }
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EAB end
    }

    /**
     * Almacena el valor para una variable de configuracion
     *
     * @access public
     * @author
     * @param  String name
     * @return mixed
     * @since 26/01/2009
     */
    public function get($name)
    {
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EB0 begin
        if(isset($this->vars[$name]))
        {
            return $this->vars[$name];
        }
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EB0 end
    }

    /**
     * Crea una instancia unica de Config
     *
     * @access public
     * @author
     * @return mixed
     * @since 26/01/2009
     */
    public static function singleton()
    {
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EB3 begin
        if (!isset(self::$instancia)) {
            $c = __CLASS__;
            self::$instancia = new $c;
        }
 
        return self::$instancia;
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000EB3 end
    }

} /* end of class Config */

?>