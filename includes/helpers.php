<?php

function assetsPath(){
    echo '/mspr-wis2/assets/';
}


function connectDB()
{
    // On se connecte a la base de données
    return new PDO('mysql:host=localhost;dbname=msprwis2', 'root', 'root',
        [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET  NAMES utf8']
    );

}

// We get the users from the DBH
function getUsers()
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}

// find "id" using pw and email
function getUser_id($email, $password)
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE email = '$email' && password = '$password' ");
    return $stmt->fetch(PDO::FETCH_ASSOC); // many to show
}



