<?php

$blogtags = array(
    "pol" => "👴🏼Politica",
    "soc" => "👥Sociales",
    "list" => "💆🏻‍♂️Estilo de vida",
    "pers" => "🙋🏻‍♂️Personal",
    "tech" => "👨🏻‍💻Tecnología",
    "logcomp" => "🧮Lógica y Computación",
    "ling" => "🗣️Lingüística",
    "phi" => "🤔Filosofía",
    "sci" => "👨🏻‍🔬Ciencia"
);

function getTagLinks($tags_list)
{
    global $blogtags;

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
