<?php include_once '../../includes/head.php'; ?>

<?php


$values = [
    'title' => $_POST['title'],
    'body' => $_POST['body'],
    'score_yuka' => $_POST['score_yuka'],
    'thumbnail' => "https://picsum.photos/1000/800",
    'user_id' => $_SESSION['user']['id'],
];

$dbh = connectDB();
$query = $dbh->prepare('INSERT INTO posts (title, body, score_yuka, thumbnail , user_id	 ) VALUES (:title, :body, :score_yuka, :thumbnail, :user_id ) ');
$query->execute($values);

header("Location: my-posts.php");
?>