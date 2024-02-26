<?php
$title = "Inicio";
$header = "Página de Horacio Zini";

$main_content = '
	<p align="center">
	<a>Hola! Soy Horacio Zini. Ésta es mi página.<br>
	Espero que lo que encuentres acá te sea de interés.</a> 
	</p>

	<br><br>

	<ul>
		<li>
			<a href="./writings.php">
			📄Escritos</a> 
		</li>
		<li>
			<a href="/">✉️Contacto</a> 
		</li>
	</ul>
';

require('./assets/templates/template.html');
