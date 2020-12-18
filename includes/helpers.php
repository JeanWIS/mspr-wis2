<?php



function assetsPath()
{
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
    return $stmt->fetch(PDO::FETCH_ASSOC); // one to show
}

function getFriendId($my_id)
{ // diosplay all friends, statu 1 == my Friend
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT friend_id FROM friends WHERE user_id = '$my_id' && status = 1");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}

function getFriend($user_id)
{ // Find user name, email, ... using his id
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE id = '$user_id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}

function getUser($user_id)
{ /* User's Profile */
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM users WHERE id = '$user_id'");
    return $stmt->fetch(PDO::FETCH_ASSOC); // many to show
}

/* CRUD Friends, Are we friends,   */

function areWeFriends($user_id, $friend_id)
{ // Find user name, email, ... using his id
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM `friends` WHERE user_id = '$user_id' && friend_id = '$friend_id'");
    return $stmt->fetch(PDO::FETCH_ASSOC); // many to show
}

/* See  my feed, with all posts from my posts \ ID /  */
function getMyFeed($my_id)
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT friend_id FROM `friends` WHERE user_id = '$my_id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}

/* END ••• See  my feed, with all posts from my posts  \ ID / */


/* See  my feed, with all posts from my posts \ Post /  */
function getMyFeedPosts($friend_id)
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM `posts` WHERE user_id = '$friend_id'");
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // many to show
}

/* END ••• See  my feed, with all posts from my posts  \ Post / */


/* See post \ Store-post / */
function getPost_id($body, $title, $user_id)
{
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM posts WHERE body = '$body' && title = '$title'&& user_id = '$user_id' ");
    return $stmt->fetch(PDO::FETCH_ASSOC); // onetitle
}

/* END ••• See post  \ Store-post / */

/* See post \ Post / */
function getPost($user_id)
{ // Find user name, email, ... using his id
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM posts WHERE id = '$user_id'");
    return $stmt->fetch(PDO::FETCH_ASSOC); // many to show
}

/* END ••• See post  \ Post / */

/* Is this post liked   */
function isPostLiked($post_id, $user_id)
{ // Find user name, email, ... using his id
    $dbh = connectDB();
    $stmt = $dbh->query("SELECT * FROM `likes` WHERE post_id = '$post_id' && user_id = '$user_id'");
    return $stmt->fetch(PDO::FETCH_ASSOC); // many to show
}
