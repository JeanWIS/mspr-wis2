<?php include_once 'includes/helpers.php';

$id = $_GET['id'];

$data = [
    'body'       => $_POST['body'],
    'title'       => $_POST['title'],
    'thumbnail'   => $_POST['thumbnail'],
    'score_yuka'   => $_POST['score_yuka'],
    'user_id'   => $_POST['user_id'],
];


$dbh = connectDB();


$stmt = $dbh ->prepare('UPDATE users SET  body = :body, title = :title, thumbnail = :thumbnail, score_yuka = :score_yuka, user_id = :user_id WHERE id_posts = :id');
$stmt->bindValue(':body', $data['body']);
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':thumbnail', $data['thumbnail']);
$stmt->bindValue(':score_yuka', $data['score_yuka']);
$stmt->bindValue(':user_id', $data['user_id']);
$stmt->bindValue(':id', $id);
$stmt->execute();

header("Location: index.php?id=$id");