<?php


function connectDB()
{
    // On se connecte a la base de données
    return new PDO('mysql:host=localhost;dbname=msprwis2', 'root', 'root',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET  NAMES utf8']
    );

}