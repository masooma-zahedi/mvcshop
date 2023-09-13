    <?php 
    require_once "controller/Csetting.php";
    $setting = $classSet->setting_list()[0];
    
    ?>
    
    <!-- Footer Start -->
    <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary text-uppercase"><span class="text-secondary">&</span class=""><?php echo $setting['titleSite'] ?></h1>
                    </a>
                </div>
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $setting['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $setting['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $setting['youtube'] ?>"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-secondary btn-social" href="<?php echo $setting['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2"><?php echo $setting['address'] ?></p>
                            <p class="mb-0">+<?php echo $setting['phone'] ?></p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2"><?php echo $setting['openHours'] ?></p>
                            <p class="mb-0"><?php echo $setting['closeHours'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/default/lib/easing/easing.min.js"></script>
    <script src="public/default/lib/waypoints/waypoints.min.js"></script>
    <script src="public/default/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="public/default/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="public/default/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="public/default/mail/jqBootstrapValidation.min.js"></script>
    <script src="public/default/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/default/js/main.js"></script>
</body>

</html>