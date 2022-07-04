<?php
include 'layouts/header.php';
include 'data/db.php';
?>

<!-- Navigation -->
<?php include 'layouts/navbar.php'; ?>


<?php

$id = '';
$result = '';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    foreach ($activities as $activity) {
        if ($activity['id'] == $_GET['id']) {
            $result = $activity;
        }
    }
}

?>

<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="<?= $result['headerimg'] ?>" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h1 class="section-heading"><?= $result['title'] ?></h1>
                </div>
            </div>
            <div>
            </div>
</section>

<section>
    <div class="section-inner">
        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 blog-item mb100 wow match-height">
                    <div class="row">
                        <div class="col-sm-12 single-post-content">
                            <div>
                                <img src="<?= $result['image1'] ?>" class="img-responsive smoothie container-fluid" alt="image theatre">
                                <div class="overlay-item-caption smoothie"></div>
                            </div>
                            <div class="item-metas text-muted mb30">
                                <span class="meta-item">Catégorie :
                                    <span><?= $result['category'] ?></span></span>
                            </div>
                            <p class="center lead nopad"><?= $result['description1'] ?></p>
                            <p><?= $result['description2'] ?></p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 single-post-content">



                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                        <?php foreach ($result['images'] as $img) : ?>
                            <li>
                                <div class="row hover-item">
                                    <div class="col-xs-12">
                                        <img src="<?= $img ?>" class="img-responsive smoothie" alt="">
                                    </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
</section>

<div class="text-center all-activities">
    <a class="btn btn-primary mt30" href="activites.php">voir toutes nos activités</a>
</div>



<?php include 'layouts/footer.php' ?>