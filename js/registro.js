/************************************************************
	Validador del formulario
************************************************************/
new FormCheck('frmRegistro', {
	submitByAjax: true,
	ajaxEvalScripts: true,
	onAjaxRequest: function(){
		//Desactivamos el boton e insertamos el preloader
		$('enviarRegistro').addClass('desactivado');
		$('enviarRegistro').set('disabled','disabled');
		var load=new Element('img',{'src':'./images/loading.gif','alt':'Loading','id':'loader2'});
		load.inject($('enviarRegistro'), 'after');
	},
	onAjaxSuccess: function(response){
		//Destruimso el preloader
		$('loader2').dispose();
		$('enviarRegistro').removeClass('desactivado');
		$('enviarRegistro').set('disabled','');
		//Mostramos el resultado
		switch(response){
			case '0':
				alert('Su cuenta a sido creada con éxito, recibirá un correo para confirmar su cuenta, puede loguearse en la parte superior para comenzar a jugar pero si no confirma su cuenta en 24 horas será borrada.');
				$('botonCerrar').fireEvent('click');
				break;
			case '1':
				alert('El e-mail no es correcto.');
				break;
			case '2':
				alert('El e-mail ya existe.');
				break;
			case '3':
				alert('El usuario no es correcto, debe tener entre 4 y 15 caracteres.');
				break;
			case '4':
				alert('La contraseña no es correcta, debe tener entre 5 y 25 caracteres.');
				break;
			case '5':
				alert('El nombre de usuario ya existe.');
				break;
			case '6':
				alert('Error, intentelo de nuevo más tarde o informe al administrador.');
				break;
			case '7':
				alert('El captcha es incorrecto.');
				break;
			case '8':
				alert('Se ha llegado al límite de usuarios del servidor, intente registrarse más tarde.');
				break;	
		}
	},
	onAjaxFailure: function(){
		//Destruimso el preloader
		$('loader2').dispose();
		$('enviarRegistro').removeClass('desactivado');
		$('enviarRegistro').set('disabled','');
		alert('Error, intentelo de nuevo más tarde');
	},
	display : {
		errorsLocation : 3,
		titlesInsteadNames : 1,
		indicateErrors : 1,
		flashTips : true,
		fadeDuration : 1000
	}
});

/************************************************************
	Boton de disponible
************************************************************/
if($defined($('btnDisponible'))){
	$('btnDisponible').addEvent('click', function(){
		if($('registroUsuario').get('value')!=''){
			//Enviamos la peticion
			var req = new Request({
				url: 'index.php?controlador=Index&accion=comprobarUsuario&usuario='+$('registroUsuario').get('value')+'&servidor='+$('registroServidor').getSelected()[0].get('value'),
				method: 'post',
				onRequest: function(){
					$('btnDisponible').addClass('desactivado');
					$('btnDisponible').set('disabled','disabled');
					var load=new Element('img',{'src':'./images/loading.gif','alt':'Loading','id':'loader'});
					load.inject($('registroUsuario'), 'after');
				},
				onSuccess: function(txt){
					//Destruimso el preloader
					$('loader').dispose();
					$('btnDisponible').removeClass('desactivado');
					$('btnDisponible').set('disabled','');
					//Mostramos el resultado
					if(txt=='0')
						alert('El nombre de usuario está disponible en este servidor');
					else
						alert('El nombre de usuario no está disponible en este servidor');
				},
				onFailure: function(){
					//Destruimso el preloader
					$('loader').dispose();
					$('btnDisponible').removeClass('desactivado');
					$('btnDisponible').set('disabled','');
					alert('Error, intentelo de nuevo más tarde');
				}
			});
			req.send();
		}
	});
}

/************************************************************
	Seleccion de raza
************************************************************/
if($defined($('registroRaza'))){
	$('registroRaza').addEvent('change', function(){
		//Si se ha seleccionado una raza
		if($('registroRaza').selectedIndex!=0){
			var nombre=$('registroRaza').getSelected()[0].get('text');
			var id=$('registroRaza').getSelected()[0].get('value');
			var elementos=$('registroRaza').getSelected()[0].get('title').split("|");;
			
			var h2=new Element('h2',{'text':nombre});
			var img=new Element('img',{'src':'./images/razas/'+id+'.jpg', 'alt':nombre, 'width':'351', 'height':'281'});
			var p=new Element('p',{'text':elementos[0]});
			var a=new Element('a',{'href':'http://wiki.sgcommander.com/index.php?title='+nombre,'target':'_blank','text':'Ver más sobre los '+nombre});
			var tropastxt=new Element('div',{'text':'Tropas','class':'titulo'});
			var navestxt=new Element('div',{'text':'Naves','class':'titulo'});
			var defensastxt=new Element('div',{'text':'Defensas','class':'titulo'});
			var tropas=new Element('div',{'class':'barra'});
			var naves=new Element('div',{'class':'barra'});
			var defensas=new Element('div',{'class':'barra'});
			var tropasrel=new Element('div',{'class':'relleno'});
			var navesrel=new Element('div',{'class':'relleno'});
			var defensasrel=new Element('div',{'class':'relleno'});
			
			//Insertamos los elementos
			$('visorRaza').empty();
			$('visorRaza').adopt(h2);
			$('visorRaza').adopt(img);
			$('visorRaza').adopt(p);
			//$('visorRaza').adopt(a);
			$('visorRaza').adopt(tropastxt);
			tropas.adopt(tropasrel);
			$('visorRaza').adopt(tropas);
			$('visorRaza').adopt(navestxt);
			naves.adopt(navesrel);
			$('visorRaza').adopt(naves);
			$('visorRaza').adopt(defensastxt);
			defensas.adopt(defensasrel);
			$('visorRaza').adopt(defensas);
			
			//Animamos las barras
			tropasrel.tween('width',new String(parseInt(elementos[1]*200/5)));
			navesrel.tween('width',new String(parseInt(elementos[2]*200/5)));
			defensasrel.tween('width',new String(parseInt(elementos[3]*200/5)));
		}
		else
			$('visorRaza').empty();
	});
}
