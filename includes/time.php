<?php

//Permet de charger les dépendances php
require_once '../vendor/autoload.php';

// On utilise Carbon pour gérer les dates
use Carbon\Carbon;

//Fuseau defini sur Paris
date_default_timezone_set('Europe/Paris');
// Transforme le texte en date
$date = Carbon::make($created_at)->locale('fr-FR');
//Affiche  la différence par rapport à maintenant de maniere comprehensible
echo $date->diffForHumans();

?>


