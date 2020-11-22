<?php

error_reporting(E_ALL);

/**
 * Recibe una matriz a la cual le aplica los filtros
 * especificos para evitar la mayoria de inyecciones
 *
 * @author
 * @package libs
 * @since 27/01/2009
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE1-includes begin
// section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE1-includes end

/* user defined constants */
// section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE1-constants begin
// section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE1-constants end

/**
 * Recibe una matriz a la cual le aplica los filtros
 * especificos para evitar la mayoria de inyecciones
 *
 * @access public
 * @author
 * @package libs
 * @since 27/01/2009
 */
class Asegurar
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Lista de equivalencias entre entidades
     * html y xhtml
     *
     * @access private
     * @since 16/01/2010
     * @var Integer
     */
    private $equivalencias = null;

    // --- OPERATIONS ---

    /**
     * Constructor de la clase
     *
     * @access public
     * @author
     * @param  Integer arreglo
     * @since 27/01/2009
     */
    public function Asegurar(&$arreglo)
    {
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE2 begin
        //TODO Falta hacerlo estatico apra que no se tenga que recorrer cada vez
		$this->equivalencias = Array();
        foreach (get_html_translation_table(HTML_ENTITIES, ENT_QUOTES) as $character => $entity) {
        	$this->equivalencias[$entity] = '&#' . ord($character) . ';';
    	}
    	
        //Comprueba si el servidor usa magic_quotes
		if(get_magic_quotes_gpc())
			//Aplica el filtro teniendo en cuenta las magic_quotes
			array_walk($arreglo, array($this, 'filtroQuotes'));
		else
			//Aplica el filtro normal
			array_walk($arreglo, array($this, 'filtro'));
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE2 end
    }

    /**
     * Filtro para configuracion sin magic_quotes
     *
     * @access private
     * @author
     * @param  String valor
     * @return mixed
     * @since 27/01/2009
     */
    private function filtro(&$valor)
    {
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE5 begin
        //Si el valor no es una matriz, asegura las variables
        if(!is_array($valor))
			$valor = $this->xhtmlentities(htmlentities(html_entity_decode(trim($valor), ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8'));
		//Si no, llama a asegurar para que asegure el array
		else
        	$this->Asegurar($valor);
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE5 end
    }

    /**
     * Filtro para configuracion con magic_quotes
     *
     * @access private
     * @author
     * @param  String valor
     * @return mixed
     * @since 27/01/2009
     */
    private function filtroQuotes(&$valor)
    {
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE8 begin
        //Si el valor no es una matriz, asegura las variables
        if(!is_array($valor))
    		$valor = $this->xhtmlentities(htmlentities(html_entity_decode(stripslashes(trim($valor)), ENT_QUOTES, 'UTF-8'), ENT_QUOTES, 'UTF-8'));
        //Si no, llama a asegurar para que asegure el array
    	else
        	$this->Asegurar($valor);
        // section 127-0-1-1-2fc5b5ba:11f17d4d48a:-8000:0000000000000EE8 end
    }

    /**
     * Sustituye en una cadena por la entidades de 
     * xhtml
     *
     * @access public
     * @author
     * @param  String cadena
     * @return mixed
     * @since 16/01/2010
     */
    public function xhtmlentities($cadena)
    {
        // section 127-0-1-1-754e8e6d:12637c07c3a:-8000:00000000000018B9 begin
       	return strtr($cadena, $this->equivalencias);
        // section 127-0-1-1-754e8e6d:12637c07c3a:-8000:00000000000018B9 end
    }

} /* end of class Asegurar */

?>