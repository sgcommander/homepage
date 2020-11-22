<?php

error_reporting(E_ALL);

/**
 * Clase que genera una conexión a la BBDD
 *
 * @author
 * @package libs
 * @since 23/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E5A-includes begin

// section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E5A-includes end

/* user defined constants */
// section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E5A-constants begin
// section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E5A-constants end

/**
 * Clase que genera una conexión a la BBDD
 *
 * @access public
 * @author
 * @package libs
 * @since 23/01/2009
 */
class SPDO
extends mysqli
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Instancia de la clase
     *
     * @access private
     * @since 23/01/2009
     * @var SPDO
     */
    private static $instancia = null;

    // --- OPERATIONS ---

    /**
     * Devuelve la instancia de la conexión a la BBDD
     * y comienza la transaccion
     *
     * @access public
     * @author
     * @return mixed
     * @since 23/01/2009
     */
    public static function singleton()
    {
        // section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E67 begin
	if( self::$instancia == null ) 
	{
		self::$instancia = new self();
	}
	
	return self::$instancia;
        // section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E67 end
    }

    /**
     * Constructor de la clase
     *
     * @access public
     * @author
     * @return mixed
     * @since 23/01/2009
     */
    public function SPDO()
    {
        // section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E69 begin
        //Obtengo la configuracion del sistema
		$config = Config::singleton();
		
		//Genero la conexion a la base de datos
		parent::__construct($config->get('dbhost') , $config->get('dbuser'), $config->get('dbpass'), $config->get('dbname'), $config->get('dbport'));
        
		//Desactivamos el autocommit
		$this->autocommit(FALSE);
        // section 127-0-1-1-6f215dcb:11f09a8db56:-8000:0000000000000E69 end
    }

    /**
     * Realiza una consulta recibiendo opcionalmente los parametros de cache
     *
     * @access public
     * @author
     * @param  String sql
     * @param  Integer tipoCache
     * @param  String id
     * @return mixed
     * @since 24/01/2009
     */
    public function consulta($sql, $tipoCache = noCachear, $id = NULL)
    {
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E78 begin
		return $this->peticion($sql);
        // section 127-0-1-1--6fc06a3e:11f12deeda9:-8000:0000000000000E78 end
    }

    /**
     * Destructor que cierra la conexión y termina
     * la transaccion
     *
     * @access public
     * @author
     * @return mixed
     * @since 28/01/2009
     */
    public function __destruct()
    {
        // section 127-0-1-1--268f2b52:11f1f602823:-8000:0000000000000FD3 begin
        //Acepta la transaccion
		$this->commit();
		$this->close();
        // section 127-0-1-1--268f2b52:11f1f602823:-8000:0000000000000FD3 end
    }

    /**
     * Realiza una consulta y devuelve el resultado 
     * a consulta o hace un rollback en caso de error
     *
     * @access private
     * @author
     * @param  String sql
     * @return mixed
     * @since 16/01/2010
     */
    private function peticion($sql)
    {
        // section 127-0-1-1-754e8e6d:12637c07c3a:-8000:00000000000018A7 begin
        //Realizo la consulta
		$consulta=$this->query($sql);
		
		//Si se ha producido un error, hago rollback y corto la conexi�n
    	if($this->errno){
			//En caso de error estabilizamos la bd
			$this->rollback();//Podria ser omitido, pero se mantiene por seguridad
			//Matamos el proceso
			exit;
		}
		
		return $consulta;
        // section 127-0-1-1-754e8e6d:12637c07c3a:-8000:00000000000018A7 end
    }

} /* end of class SPDO */

?>