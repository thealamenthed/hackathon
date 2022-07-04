<?php
include 'layouts/header.php';
?>

<!-- Navigation -->

<?php
include 'data/db.php';
include 'layouts/navbar.php';


?>


<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/nos_actions_2.jpg" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h1 class="section-heading">Nos actions et activités</h1>
                </div>
            </div>
        </div>
</section>



<div class="container padding-top-200">
    <h3 style="padding-top:4rem;">Notre but : <br>
    </h3>
    <i>FAVORISER L'AUTONOMIE, L'ENRACINEMENT, L'OUVERTURE A L'AUTRE POUR UN MIEUX-VIVRE ENSEMBLE </i>

    <hr>


    <!-- <h3 style="padding-top:4rem;">Notre but est de FAVORISER L'AUTONOMIE, L'ENRACINEMENT, L'OUVERTURE A L'AUTRE POUR UN MIEUX-VIVRE ENSEMBLE</h3> -->

    <p classe="lead text-left">Elles s'articulent autour de trois thèmes:
    <ul>
        <li><strong> LA CULTURE:</strong> <i>INFORMER - ORGANISER - SORTIR</i></li>
        Nous proposons et organisons des sorties culturelles, vecteurs de dialogue et de rencontre entre les publics. Nous développons des partenariats avec des structures culturelles qui s'engagent à mettre à disposition des invitations, nous proposons des tarifs préférentiels sur des évènements.
        Nous promouvons la culture africaine auprès des jeunes et des moins jeunes, et nous favorisons l'accès à la lecture et aux livres.

        <li><strong>LA MEDIATION SOCIALE:</strong> <i>ECOUTER - INFORMER - ORIENTER</i></li>
        L'association propose de soutenir les personnes dans leurs démarches d'accès aux droits et aux savoirs pour permettre à chacun de trouver sa place dans la société française.

        <li><strong>LA COOPERATION INTERNATIONALE:</strong> <i>CONSEILLER - SOUTENIR - DEVELOPPER</i></li>
        Appui à l'éducation en Afrique.
        Partenariat avec des associations travaillant sur place.</p>
    </ul>

    <hr>
</div>


<section>
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <?php foreach ($activities as $activity) { ?>
                    <div class="col-sm-4 blog-item mb100 wow match-height">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="hover-item mb30">
                                    <img src="<?= $activity['image1'] ?>" class="img-responsive smoothie container-fluid" alt="image theatre" style="width: 1200px;height: 255px;">
                                    <div class="overlay-item-caption smoothie"></div>
                                </div>
                                <h3 class="post-title pt-3"><?= $activity['title'] ?></h3>
                                <div class="item-metas text-muted mb30">
                                    <span class="meta-item">Catégorie:
                                        <span><?= $activity['category'] ?></span></span>
                                </div>
                                <p class="center"><?= $activity['description1'] ?></p>
                                <a class="btn btn-primary mt30 mb-5" href="details.php?id=<?php echo $activity['id']; ?>">Plus d'information</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
    </div>
</section>






<!-- footer -->
<?php include 'layouts/footer.php' ?>