<?php include_once '../includes/head.php'; ?>
<?php include_once '../includes/header.php';



?>

<main id="main">

    <?php include_once '../includes/sidebar.php' ?>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <?php
                    if ($friends_id = getMyFeed($_SESSION['user']['id'])) :
                        foreach ($friends_id as $friend_id) :
                            if ($posts = getMyFeedPosts($friend_id['friend_id'])) :
                                foreach ($posts as $post) :
                                    ?>
                                    <!-- Page Content -->
                                    <div class="container p-5">
                                        <h1> <?php echo $post['title'] ?> </h1>
                                        <h6><?php echo $post['created_at'];?> </h6>
                                        <div class="row">
                                            <div class="col-6">
                                                <img src="<?php echo $post['thumbnail'] ?>" alt=""
                                                     class="img-fluid img-thumbnail ">
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <div class="card-header">
                                                        Created by <?php $user =  getUser($post['user_id']);
                                                        echo $user['first_name'] . " " . $user['last_name']; ?>
                                                    </div>
                                                </div>
                                                <div class="content-post mt-3">
                                                    <?php
                                                    // show only 500 character on the feed.php
                                                    $TextMore500 = true;
                                                    $string = strip_tags($post['body']);
                                                    if (strlen($string) > 500) {

                                                        // truncate string
                                                        $stringCut = substr($string, 0, 500);
                                                        $endPoint = strrpos($stringCut, ' ');

                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= '... <br>';
                                                        $TextMore500 = false;
                                                    }
                                                    echo $string;
                                                    if (strlen($string) > 500) :
                                                    ?> <a href="post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3">See more</a><br> <?php
                                                    endif;
                                                    if ($TextMore500) { ?>  <br><a href="post/post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary mt-3" >See
                                                        Post</a> <?php
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                    <!-- /#page-content -->
                                <?php
                                endforeach;
                            endif;
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>


<?php
/*
require_once '../vendor/autoload.php'; //charger dépendnaces

use Carbon\Carbon;

printf("Right now is %s", Carbon::now()->toDateTimeString());
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver')); // automatically converted to string
$today = Carbon::now();
echo $today . "<br>";
$lastWeek = Carbon::now()->subWeek();
echo $lastWeek . "<br>";
echo $today-$lastWeek;



// Carbon embed 822 languages:
echo $tomorrow->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm');
echo $tomorrow->locale('ar')->isoFormat('dddd, MMMM Do YYYY, h:mm');

$officialDate = Carbon::now()->toRfc2822String();

$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;

$noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');

$internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');

if (Carbon::now()->isWeekend()) {
    echo 'Party!';
}
echo Carbon::now()->subMinutes(2)->diffForHumans(); // '2 minutes ago'

// Want to know more about diffForHumans? Double-click on the method name!

*/
include_once '../includes/footer.php'; ?>


