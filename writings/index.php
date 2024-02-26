<?php
// Obtiene la última parte de la URL después de la última barra /
$partesUrl = explode('writings/', $_SERVER['REQUEST_URI']);
$escritoSolicitado = end($partesUrl);

// Ruta al archivo de datos del escrito
$rutaEscrito = "./data/$escritoSolicitado";

// Verificar si el archivo del escrito existe
if (file_exists("$rutaEscrito/data.php")) {
    require("$rutaEscrito/data.php");
    $tag_links = getTagLinks($tags);
    $main_content = file_get_contents("$rutaEscrito/content.html");
    require('../assets/templates/writings.html');
} else {
    header("Location: ../index.php");
    exit();
}

function getTagLinks($tags_list)
{
    include '../tags.php';

    $tag_links = '';
    foreach ($tags_list as $tag) {
        if (array_key_exists($tag, $blogtags)) {
            $tag_links .= "<a href='./tags/$tag'>" . $blogtags[$tag] . "</a> · ";
        }
    }
    // Delete the last " · "
    $tag_links = rtrim($tag_links, " · ");

    return $tag_links;
}
