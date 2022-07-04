<!--  footer -->
<footer class="white-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-links wow">
                    <li>
                        <a href="https://www.facebook.com/Association-A-Nous-La-Culture-113773057137082/?ref=page_internal" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/associationanouslaculture/" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12 text-center">
                <a class="btn btn-light" href="nous_rejoindre.php" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ph" width="15" height="15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                        <path fill="currentColor" d="M128 24a104 104 0 1 0 104 104A104.2 104.2 0 0 0 128 24Zm0 192a88 88 0 1 1 88-88a88.1 88.1 0 0 1-88 88ZM80 108a12 12 0 1 1 12 12a12 12 0 0 1-12-12Zm104 0a8 8 0 0 1-8 8h-24a8 8 0 0 1 0-16h24a8 8 0 0 1 8 8Zm-7.5 48a56 56 0 0 1-97 0a8 8 0 1 1 13.8-8a40.1 40.1 0 0 0 69.4 0a8 8 0 0 1 13.8 8Z"></path>
                    </svg> Devenir bénevole</a>

                <a class="btn btn-light" href="index.php#newsletter" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="15" height="15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 .64L8.23 3H5v2L2.97 6.29C2.39 6.64 2 7.27 2 8v10a2 2 0 0 0 2 2h16c1.11 0 2-.89 2-2V8c0-.73-.39-1.36-.97-1.71L19 5V3h-3.23M7 5h10v4.88L12 13L7 9.88M8 6v1.5h8V6M5 7.38v1.25L4 8m15-.62L20 8l-1 .63M8 8.5V10h8V8.5Z"></path>
                    </svg> Inscription à la newsletter</a>

                <a class="btn btn-light" href="mention_legale.php" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="15" height="15" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M13 20V8.8c.5-.2 1-.5 1.3-.9l3.5 1.3l-2.9 6.8c-.5 2 1 3 3.5 3s4.1-1 3.5-3l-2.6-6.3l.9.3l.7-1.9L15 6c0-1.2-.7-2.4-2-2.9c-1.2-.5-2.5 0-3.3.9L3.9 2l-.7 1.8l1.6.6L2.1 11c-.5 2 1 3 3.5 3s4.1-1 3.5-3L6.6 5.1L9 6c0 1.2.7 2.4 2 2.9V20H2v2h20v-2h-9m6.9-4h-3l1.5-3.8l1.5 3.8M7.1 11h-3l1.5-3.8L7.1 11m4-5.3c.2-.5.8-.8 1.3-.6s.8.8.6 1.3s-.8.8-1.3.6s-.8-.8-.6-1.3Z"></path>
                    </svg> Mentions légales</a>
            </div>
            <hr class="thin-hr" />
            <div class="text-center pb-3" style="width: 100%">
                <span class="copyright">© 2022 copyright A NOUS LA CULTURE</span>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="assets/js/init.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    $(document).ready(function() {
        'use strict';
        jQuery('#headerwrap').backstretch([
            "assets/img/3.jpg",
            "assets/img/2.jpg",
            "assets/img/4.jpg"
        ], {
            duration: 5000,
            fade: 500
        });
        jQuery('#headercontact').backstretch([
            "assets/img/3.jpg",
        ], {
            duration: 5000,
            fade: 500
        });

        $('.owl-carousel-paged').owlCarousel({
            navigation: false,
            pagination: false,
            autoPlay: 8000,
            loop: true
        });
    });
</script>
</body>

</html>