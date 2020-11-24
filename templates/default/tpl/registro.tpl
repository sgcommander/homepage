	<div id="respuesta"></div>
	<div id="visorRaza"></div>
	<input type="hidden" name="controlador" value="Index" />
	<input type="hidden" name="accion" value="peticionRegistro" />
	<label>{_USUARIO}333</label>
	<input type="text" name="registroUsuario" id="registroUsuario" class="validate['required','length[3,15]'] registro" />
	<input type="button" class="boton" value="{_COMPROBARDISPONIBILIDAD}" id="btnDisponible" />
	<label>{_EMAIL}</label>
	<input type="text" name="registroEmail" id="registroEmail" class="validate['required','email'] registro" />
	<label>{_CONTRASENA}</label>
	<input type="password" name="registroPass" title="{_CONTRASENA}" id="registroPass" class="validate['required','length[5,25]'] registro" autocomplete="on" />
	<label>{_REPETIRCONTRASENA}</label>
	<input type="password" name="registroPass2" id="registroPass2" class="validate['confirm[registroPass]'] registro" autocomplete="on" />
	<label>{_SERVIDOR}</label>
	<select name="registroServidor" id="registroServidor">
		<!-- BEGIN tServer -->
		<option value="{SERVERURL}">{SERVERNAME}</option>
		<!-- END tServer -->
	</select>
	<label>{_RAZA}</label>
	<select name="registroRaza" id="registroRaza" class="validate['required']">
		<option selected="selected" value="">{_SELECCIONERAZA}</option>
		<option value="1" title="Humanos de la Tierra, destacan entre los demás grupos humanos esparcidos por el Universo por su gran curiosidad y adaptabilidad a nuevas tecnologías, así como por lo hábiles que son para superar problemas complejos o pactar con otras especies superiores como los Asgard.|5|2|2">Tau'ri</option>
		<option value="2" title="Los Goa'uld son una raza de parásitos que toman como huéspedes a otros seres a los que pueden controlar a través de un vínculo directo con su sistema nervioso. Se hacen pasar por dioses o señores para controlar ejércitos y pueblos enteros por toda la Vía Láctea. Los más poderosos conforman un grupo denominado Señores del sistema.|3|4|2">Goa'uld</option>
		<option value="3" title="Los Asgard son una de las cuatro grandes razas. Son una benévola y muy adelantada raza de otra galaxia que ha visitado la Tierra en muchas ocasiones, dando lugar a las leyendas nórdicas. Su política en la Vía Láctea generalmente es oponerse a los Goa'uld, además de ser el aliado más poderoso del planeta tierra pero hay facciones Asgard en varias galaxias. |1|5|3">Asgard</option>
		<option value="4" title="Humanos que fueron secuestradados de la Tierra por los Goa'uld usando el Stargate durante la antigüedad para servir como esclavos y como anfitriones de las larvas inmaduras, llevando en su frente el símbolo de su dios, ya sea en oro fundido o pintado. Habitan en la Vía Láctea, los planetas con grandes poblaciones de Jaffa son Chulak, Dakara y Delmak.|3|3|3">Jaffa</option>
		<option value="5" title="Tras descubrir la ciudad perdida de Atlantis en la galaxia Pegasus los Tau'ri establecieron alli un contingente para investigar la tecnología antigua, pero al toparse con los wraith tuvieron que enfrentarse a un nuevo enemigo para impedir que llegasen a la Tierra.|2|3|4">Atlantis</option>
		<option value="6" title="Seres que mezclan el ADN humano con el del insecto Iratus, se alimentan de otras especies consumiendo su vida, tienen una estructura social de tipo colmena con reinas que dominan amplios territorios y grandes flotas a lo largo de la galaxia Pegasus. Sus naves carecen de escudos por lo que deben confiar en su superioridad numérica.|4|4|1">Wraith</option>
		<option value="7" title="Los Replicantes, son una potente forma de vida mecánica compuesta de bloques que utilizan nanotecnología,con el único objetivo de autoreplicarse bajo cualquier costo y medio. Son capaces de incrementar su número rapidamente y se han expandido a través de todas las galaxias asimilando tecnologías avanzadas. Tienen la capacidad de capturar las naves enemigas|4|4|1">Replicantes</option>
		<option value="8" title="Son una raza de seres ascendidos que usan sus conocimientos infinitos del Universo para convencer a seres menores para adorarles, aumentando asi su poder para luchar contra los antiguos. Esto les lleva a comandar grandes ejercitos a lo largo de su galaxia de origen para lanzarlos en cruzadas contra los infieles.|2|4|3">Ori</option>
	</select>
	<div id="registroAcepto"><input type="checkbox" id="acepto" name="acepto" class="validate['required']" /> {_ACEPTOTERMINOS}</div>
	<div id="visorCaptcha"><img src="index.php?controlador=Index&accion=captcha" alt="Captcha" id="captcha"/>
	<input type="text" name="registroCaptcha" id="registroCaptcha" class="validate['required'] registro" /></div>
	<input type="submit" class="boton" value="{_ENVIAR}" id="enviarRegistro" class="validate['submit']" />
	<div style="visibility:hidden;display:none;">
		<img src="./images/razas/1.jpg" alt="Preloader"/>
		<img src="./images/razas/2.jpg" alt="Preloader"/>
		<img src="./images/razas/3.jpg" alt="Preloader"/>
		<img src="./images/razas/4.jpg" alt="Preloader"/>
		<img src="./images/razas/5.jpg" alt="Preloader"/>
		<img src="./images/razas/6.jpg" alt="Preloader"/>
		<img src="./images/razas/7.jpg" alt="Preloader"/>
		<img src="./images/razas/8.jpg" alt="Preloader"/>
	</div>
