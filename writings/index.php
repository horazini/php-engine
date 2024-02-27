<?php
// Obtiene la última parte de la URL después de la última barra /
$partesUrl = explode('writings/', $_SERVER['REQUEST_URI']);
$escritoSolicitado = end($partesUrl);

// Ruta al archivo de datos del escrito
$rutaEscrito = "./data/$escritoSolicitado";

// Verificar si el archivo del escrito existe
if (file_exists("$rutaEscrito/data.php")) {
    require("$rutaEscrito/data.php");

    require("../third_party/Parsedown.php");
    $Parsedown = new Parsedown();
    $markdown_content = file_get_contents("$rutaEscrito/content.md");
    $main_content = $Parsedown->text($markdown_content);

    include '../utils/tags.php';
    $tag_links = getTagLinks($tags);

    require('../assets/templates/writings.html');
} else {
    header("Location: ../index.php");
    exit();
}
