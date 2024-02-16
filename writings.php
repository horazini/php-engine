<?php

$lista = ' ';
$folders = glob('./writings/data/*', GLOB_ONLYDIR); // Get list of folders in the directory

foreach ($folders as $writing) {
	$writingDataFile = $writing . '/data.php'; // Route to the data.php in the curren directory

	if (file_exists($writingDataFile)) {
		include $writingDataFile; // Includes the data file

		$partesUrl = explode('/', $writing);
		$escritoSolicitado = end($partesUrl);

		// Adds an element with date and title obtained from the data file to the list
		$lista .= "<li>$date – <a href=\"writings/$escritoSolicitado\">$title</a></li>";
	}
}

$title = "Escritos";
$header = "
	<h1>Escritos</h1>
";

$blogtags = array(
	"politica" => "👴🏼Politica",
	"sociales" => "👥Sociales",
	"estilodevida" => "💆🏻‍♂️Estilo de vida",
	"personal" => "🙋🏻‍♂️Personal",
	"tecnologia" => "👨🏻‍💻Tecnología",
	"logicomp" => "🧮Lógica y Computación",
	"linguistica" => "🗣️Lingüística",
	"filosofia" => "🤔Filosofía",
	"ciencia" => "👨🏻‍🔬Ciencia"
);

$taglist = ' ';
foreach ($blogtags as $blogtag => $emoji) {
	$taglist .=  "<li><a href='./tags/$blogtag'>$emoji </a></li>\n";
}

$contenido = "
	<article>
		<h2>Temas</h2>
		<ul id='tags'>
			$taglist
		</ul>

		<h2>Artículos</h2>
		<ul> 
			$lista
		</ul>
	</article>
";

include('./assets/templates/template.html');