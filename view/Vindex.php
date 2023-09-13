<?php
include_once "controller/Cportfolio.php";
require_once "controller/Cservices.php";
require_once "controller/Cclientsay.php";
require_once "controller/Cemployee.php";
require_once "controller/Cabout.php";
require_once "controller/Cvideo.php";
require_once "controller/Csetting.php";
require_once "controller/CheroSlider.php";
?>





<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 pb-5">
    <?php //$heroSlider = $classheroSlider->heroSlider_list(); var_dump($heroSlider) ?>
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php 
                $heroSlider = $classheroSlider->heroSlider_list();
                foreach($heroSlider as $index=>$slider):
                    // var_dump($slider);
            ?>
            <div class="carousel-item <?php if($index == 0){echo 'active';} ?> ">
            <div class="" style="height:100vh">
                <img class="w-100 h-100" src="<?php echo $slider['img']?>" alt="Image">
            </div>
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center" >
                    <div class="p-3" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase mb-md-3"><?php echo $slider['title'] ?></h4>
                        <h1 class="display-3 text-white mb-md-4"><?php echo $slider['description'] ?></h1>
                        <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More hiee</a> -->
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n1"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n1"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <?php $about = $classabout->about_showEdit(); ?>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h1 class="section-title position-relative text-center mb-5"><?php echo $about['headsubject']  ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">About Us</h4>
                <div><?php echo $about['contentabout'] ?></div>
                <!-- <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
                    <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a> -->
            </div>
            <div class="col-lg-4" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <img class="position-absolute w-100 h-100" src="<?php echo $about['img'] ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4 py-5">
                <h4 class="font-weight-bold mb-3">Our Features</h4>
                <div><?php echo $about['contentfeature'] ?></div>
                <!-- <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Promotion Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row bg-primary m-0">
        <?php $video = $classvideo->video_showEdit() ;?>
        <div class="col-md-6 px-0" style="min-height: 500px;">
            <div class="position-relative h-100">
                    <iframe class="position-absolute w-100 h-100"  src="<?php echo $video['iframe'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6 py-5 py-md-0 px-0">
            <?php echo $video['description'] ?>
            <!-- <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;">
                    <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                </div>
                <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea
                    justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
            </div> -->
        </div>
    </div>
</div>
<!-- Promotion End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="public/default/" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5">Best Services We Provide For Our Clients</h1>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel service-carousel">

                    <?php
                    $ser = $class->services_list();
                    // var_dump($ser).die;
                    foreach ($ser as $serval) :
                    ?>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="<?php echo $serval["img"] ?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><?php echo $serval['title'] ?></h5>
                                <p><?php echo $serval['description'] ?></p>
                                <a href="<?php echo $serval["link"] ?>" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Portfolio Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row justify-content-center m-0">
        <div class="col-lg-5">
            <h1 class="section-title position-relative text-center mb-5">These designs are original creations of The Empty Vase of Houston</h1>
        </div>
    </div>
    <div class="row m-0 portfolio-container">
        <?php
        $port = $classP->portfolio_list();
        foreach ($port as $port) :
        ?>
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden " style="height: 350px" id="portimg">
                    <img class="img-fluid w-100 h-100" src="<?php echo $port['img'] ?>" alt="">
                    <a class="portfolio-btn" href="<?php echo $port['img'] ?>" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<!-- Portfolio End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5"><?php echo $classSet->setting_list()[0]['desc_bestOfer'] ?></h1>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel product-carousel">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="public/default/img/product-1.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="public/default/img/product-2.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="public/default/img/product-3.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="public/default/img/product-4.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="public/default/img/product-5.jpg" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        <a href="" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h1 class="section-title position-relative mb-5">Experienced & Most Famous Ice Cream Chefs</h1>
            </div>
            <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel team-carousel">
                    <?php
                    $emplo = $classE->employee_list();
                    foreach ($emplo as $value) :
                    ?>
                        <div class="team-item">
                            <div class="team-img mx-auto">
                                <img class="rounded-circle w-100 h-100" src="<?php echo $value['img'] ?>" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded px-4 py-5" style="margin-top: -100px;">
                                <h3 class="font-weight-bold mt-5 mb-3 pt-5"><?php echo $value['name'] ?></h3>
                                <h6 class="text-uppercase text-muted mb-4"><?php echo $value['title'] ?></h6>
                                <div class="d-flex justify-content-center pt-1">
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $value['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $value['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-secondary btn-social mr-2" href="<?php echo $value['instagram'] ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Clients Say About Our Famous Ice Cream</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">

                    <?php
                    $clientsay = $classClient->clientsay_list();
                    foreach ($clientsay as $client) :
                    ?>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4"><?php echo $client['description'] ?></h4>
                            <img class="img-fluid mx-auto mb-3" src="<?php echo $client['img'] ?>" alt="">
                            <h5 class="font-weight-bold m-0"><?php echo $client['name'] ?></h5>
                            <span>Profession</span>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->