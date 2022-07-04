<?php
$teams = [
    [
        "img" => "assets/img/team/1.png",
        "name" => "Agnès Présidente",
    ],
    [
        "img" => "assets/img/team/2.png",
        "name" => "Régine Directrice générale chargée de communication",
    ],
    [
        "img" => "assets/img/team/3.png",
        "name" => "Maurice Secrétaire",
    ]
];
?>


<?php include 'layouts/header.php'; ?>

<!-- Navigation -->
<?php include 'layouts/navbar.php'; ?>



<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/a_propos.jpg" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h2 class="section-heading">Notre association </h2>
                </div>
            </div>
        </div>
    </div>
</section>





<section id="welcome">
    <div class="section-inner nopaddingbottom">

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="lead"><strong>Notre association a été créée le 10 mars 2009.</strong>
                        L'objet de notre associaiton est de promouvoir, faciliter l'accès à la culture des personnes qui en sont exclues ;
                        faire partager au plus grand nombre les connaissance relatives aux cultures de l'Afrique subsaharienne et de sa diaspora ;
                        permettre une médiation entre les acteurs sociaux, politiques et culturelles et un public ciblé ;
                        mener des actions en faveur des populations d'Afrique dans les domaines économique, social,
                        de l'éducation et de la santé en vue de contribuer à un développement durable.
                        <br>
                        <br>
                        <strong>Notre but : </strong>Faire connaitre la culture africaine subsharienne au plus grand nombre. Favoriser l'autonimie, l'enracinement, l'ouverture à l'autre pour un mieux vivre ensemble.
                        <br>
                        <br>
                        Nos objectifs  <strong> en Afrique & en Europe :</strong>
                        <ul>
                            <li>
                            Faire partager au plus grand nombre les connaissances relatives aux cultures africaines et de sa diaspora
                            </li>
                            <li>
                            Faciliter l’accès à la culture, facteur d’intégration. Faire partager la culture d’ici et de là-bas.
                            </li>
                            <li>
                            Permettre une médiation entre les acteurs sociaux, politiques et culturels et un public ciblé
                            </li>
                            <li>Mener des actions en faveur des populations d’Afrique dans les domaines économique, social, de l’éducation, de la santé en vue de contribuer à un développement durable.
                            </li>
                        </ul>
                    </p>
                    <!--           <p>               
                        Notre but
                        FAIRE CONNAITRE LA CULTURE AFRICAINE SUBSAHARIENNE AU PLUS GRAND NOMBRE.
                        FAVORISER L’AUTONOMIE, L’ENRACINEMENT, L’OUVERTURE A L’AUTRE POUR UN MIEUX VIVRE ENSEMBLE.
                    </p> -->
                </div>

                <div class="col-md-6">
                    <img src="assets/img/a_propos.webp" class="img-responsive alignright wow fadeIn" data-wow-delay="0.5s" alt="">
                </div>
            </div>
        </div>

    </div>
</section>
<br>
<br>
<hr>
<!-- team -->

<section class="white-bg">
    <div class="section-inner nopadding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 match-height">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="3" data-items-tablet="[768,2]" data-items-mobile="[479,1]">
                                <?php foreach ($teams as $team) : ?> <li>
                                        <div class="row hover-item">
                                            <div class="col-xs-12">
                                                <img src="<?php echo $team['img']; ?>" class="img-responsive smoothie" alt="">
                                            </div>
                                            <div class="col-xs-12 hover-item-caption smoothie">
                                                <div class="vertical-center">
                                                    <h3 class="smoothie"><a href="#" title="view project"><?= $team['name']; ?></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 match-height">
                    <div class="vertical-center text-center">
                        <h2 class="section-heading">L'équipe</h2>
                        <h3>Et nos bénévoles !</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'layouts/footer.php' ?>