<?php
$config = Config::singleton();

//Rutas generales
$config->set('controllersFolder', '../controllers/');
$config->set('modelsFolder', '../models/');
$config->set('viewsFolder', '../views/');
$config->set('tplFolder', '../templates/default/tpl/');
$config->set('tplCacheFolder', '../templates/default/cache/');
$config->set('imgFolder', 'images/');

//Base de datos
$config->set('dbhost', '127.0.0.1');
$config->set('dbport', '3306');
$config->set('dbname', '');
$config->set('dbuser', '');
$config->set('dbpass', '');

//Servidores from .env
$servers = array();
foreach(explode('|', getenv('UNIVERSE_HOSTS')) as $server) {
    list($key, $value) = explode('::', $server);
    $servers[$key] = $value;
}
$config->set('servers', $servers);

?>