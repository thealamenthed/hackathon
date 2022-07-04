<?php
// error c'est une variable, si jamais un champs est vide, le message"veuillez remplir tous les champs" le if c'est une formule pour qu'il n'y ait pas d'email envoyé avec des champs vides.
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['prenom'])  && !empty($_POST['email']) && !empty($_POST['message'])) {
        var_dump($_POST);
        $message = "Bonjour vous avez reçu un message de " . $_POST['name'] . " (" . $_POST['prenom'] . " ("  . $_POST['email'] . ") : " . $_POST['message'];
        mail('dandara.helen56@gmail.com', 'sujet', $message);
        //Si les champs ne sont pas vides, alors c'est ok donc on envoie un email préformaté à Régine. mail('jenny.viannay75@gmail.com', 'sujet', $_GET['message']);
    } else {
        $error = 'Veuillez remplir tous les champs';
    }
}
?>
<?php include 'layouts/header.php'; ?>
<!-- Navigation -->
<?php include 'layouts/navbar.php'; ?>
<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="assets/img/contact.jpg" data-speed="0.7">
    <div class="section-inner pad-top-200">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt30 wow text-center">
                    <h1 class="section-heading">Nous contacter</h1>
                </div>
            </div>
        <div>
    </div>
</section>
<section>


    <div class="section-inner">
        <div class="container">
            <p><?= !empty($error) ? $error : '' ?></p>
            <section class="container">
            <h3 class="text-center mt-5">N'hésitez pas à nous contacter pour participer à nos ateliers, activités et évènements et pour tous ceux qui souhaitent nous soutenir ou rejoindre notre équipe de bénévoles, nous vous attendons!!!</h3><br><hr>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-3 col-xs-12">
                        <form method="POST">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name">
                            </div>
                            <div class="form-group">
                                <label for="prenom"></label>
                                <input type="text" class="form-control" id="prenom" placeholder="Votre prénom" name="prenom">
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" placeholder="Votre email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone"></label>
                                <input type="phone" class="form-control" id="phone" placeholder="Votre téléphone" name="phone">
                            </div>
                            <div class="checkbox">
                                <p>Je suis intéressé(e) par : </p>
                                <ul class="list-group checkbox-item">
                                    <li class="list-group-item ">
                                        <input class="form-check-input me-1 " type="checkbox" value="" aria-label="...">
                                        Du bénévolat
                                    </li>
                                    <li class="list-group-item ">
                                        <input class="form-check-input me-1 " type="checkbox" value="" aria-label="..." >
                                        Une participation aux activités et évènements
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" name="message"></textarea>
                            </div>
                            <div>
                                <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                                J'accepte que ces données soient utilisées pour traiter ma demande.
                                <a href="">Lire notre politique de confidentialité</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <div class="col-lg-5 col-md-3 col-xs-12" style="margin: 8%;">
                        <p>A NOUS LA CULTURE</p>
                        <p>1, rue Montesquieu 93000 Bobigny</p>
                        <p>Permanence téléphonique: 0611675182-0647771843</p>
                        <p>E-mail : anouslaculture@yahoo.fr</p>
                        <br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.198381989241!2d2.413499315089635!3d48.91161250491275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c5f69728c07%3A0xd1e43833a8289169!2s1%20Rue%20Montesquieu%2C%2093000%20Bobigny!5e0!3m2!1sfr!2sfr!4v1656592681635!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<?php include 'layouts/footer.php' ?>