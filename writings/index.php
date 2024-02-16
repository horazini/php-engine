<?php
// Obtiene la última parte de la URL después de la última barra /
$partesUrl = explode('writings/', $_SERVER['REQUEST_URI']);
$escritoSolicitado = end($partesUrl);

// Ruta al archivo de datos del escrito
$rutaEscrito = "./data/$escritoSolicitado";

// Verificar si el archivo del escrito existe
if (file_exists("$rutaEscrito/data.php")) {
    include("$rutaEscrito/data.php");
    include("$rutaEscrito/content.php");
    include('../assets/templates/writings.html');
} else {
    header("Location: ../writings.php");
    exit();
}