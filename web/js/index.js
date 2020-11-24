/************************************************************
	Evento de carga de la pagina
************************************************************/
window.addEvent('domready', function() {
	//Login
	if($defined($('usuario')))
		var inputUsuario=new OverText($('usuario'));
	if($defined($('pass')))
		var passUsuario=new OverText($('pass'));
	
	$('contenido').fade('hide'); 

	if($defined($('botonCerrar'))){
		$('botonCerrar').addEvent('click', function(){
			$('contenido').fade('out');
		});
	}
	
	if($defined($('servidor'))){
		$('servidor').addEvent('change', function(){
			$('frmLogin').set('action',$('servidor').getSelected()[0].get('value'));
		});
	}
	
	//Boton de Registro
	$('boton1').addEvent('click', function(){
		//document.location.href='http://www.sgcommander.com/ansia.jpg';
		cargarContenido($('boton1').get('title'),'registro');
	});
	
	//Boton de Acerca de
	$('boton2').addEvent('click', function(){
		cargarContenido($('boton2').get('title'),'acercade');
	});
	
	//Boton de foro
	$('boton3').addEvent('click', function(){
		location.href='http://foro.sgcommander.net';
	});
		
	//Boton de ayuda
	$('boton4').addEvent('click', function(){
		location.href='http://wiki.sgcommander.com';
	});
	
	//Boton de Imagenes
	$('boton5').addEvent('click', function(){
		cargarContenido($('boton5').get('title'),'imagenes');
	});
	
	//Boton de Equipo
	$('boton6').addEvent('click', function(){
		location.href='http://blog.sgcommander.com';
	});
	
	//Boton de bugs
	$('boton7').addEvent('click', function(){
		location.href='http://bugs.sgcommander.com';
	});
	
	//Boton de tyc
	$('boton8').addEvent('click', function(){
		cargarContenido($('boton8').get('title'),'terminos');
	});
	
	//Boton de aviso legal
	$('boton9').addEvent('click', function(){
		cargarContenido($('boton9').get('title'),'legal');
	});
	
	//Boton de reglas
	$('boton10').addEvent('click', function(){
		cargarContenido($('boton10').get('title'),'reglas');
	});
	
	//Boton de creditos
	$('boton11').addEvent('click', function(){
		cargarContenido($('boton11').get('title'),'creditos');
	});
});

/************************************************************
	Funcion que carga contenidos
************************************************************/
function cargarContenido(titulo, accion){
	//Colocamos el titulo de la seccion
	if($defined($('titulo')))
		$('titulo').set('text', titulo);
	
	//Creamos la peticion
	var req = new Request.HTML({
			url:'index.php?controlador=Index&accion='+accion,
			method: 'post',
			evalScripts: 'true',
		onRequest: function(){
			//Mostramos la precarga
			$('contenido').fade('in');
			$('preloader').setStyle('display','inline');
		},
		onComplete: function(html) {
			//Ocultamos el mensaje de precarga
			$('preloader').setStyle('display','none');
			
			//Limpiamos el div
			$('interior').empty();
				
			//Metemos el html
			$('interior').adopt(html);
			
			//Cargamos el script
			include_once('js/'+accion+'.js','jscontenido');
		},
		onFailure: function() {
			//Ocultamos el mensaje de carga
			$('preloader').setStyle('display','none');
		}
	});
	//Enviamos la peticion
	req.send();
}

/************************************************************
	Includes
************************************************************/
function include(file_path,id){
	var script = Asset.javascript(file_path,{id: id});
}

function include_once(file_path,id){
	//Si ya hay un js con ese id cargado lo destruimos
	if($defined($(id)))
		$(id).destroy();
		
	//Lo incluimos
	include(file_path,id);
}