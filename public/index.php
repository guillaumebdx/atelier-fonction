<?php
// Pour lancer le serveur, executer cette commande à la racine du projet : php -S localhost:8000 -t public/
require_once('../src/function.php');
$watchMen = [
    'Dr. Manhattan', 
    'Ozymandias', 
    'Silk Spectre', 
    'Rorschach', 
    'The comedian', 
    'Nite Owl'
];
echo whoAmI('Ozymandias', $watchMen);