<?php
function incluirClasses($nomeClasse){    
    if(file_exists($nomeClasse.".php") === true) {
        require_once($nomeClasse .".php");
    }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    if(file_exists("Classes". DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        require_once("Classes". DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});
$contato = new Contato();
$contato->barulho();
