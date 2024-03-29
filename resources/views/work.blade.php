<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz - Work Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
<!--

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="{{ route('index') }}">

                <span class="text-dark h4">Stack-</span> <span class="text-primary h4"><strong>X</strong></span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-md-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-4">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none dropdown-toggle-no-caret dropdown-toggle px-1 bouton_accueil" href="{{ route('index') }}" id="dropdownAccueil" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accueil</a>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="#">Société</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('a_propos') }}">À propos</a>
                                <a class="dropdown-item text-gray" href="{{ route('equipe') }}">L'équipe</a>
                                <a class="dropdown-item text-gray" href="{{ route('pourquoi') }}">Pourquoi Stack-X</a>
                                <a class="dropdown-item text-gray" href="{{ route('partenaire') }}">Partenaires</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray" href="#">Services</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}">Consultant</a>
                                <a class="dropdown-item text-gray" href="{{ route('ui_ux') }}">Design D'expérience utilisateur</a>
                                <a class="dropdown-item text-gray" href="{{ route('dev_web_app') }}">Développement web et application</a>
                                <a class="dropdown-item text-gray" href="{{ route('site_web') }}">Création site web</a>
                                <a class="dropdown-item text-gray" href="{{ route('integration_systeme') }}">Intégration de systèmes</a>
                                <a class="dropdown-item text-gray" href="{{ route('sig') }}">Données géographiques</a>
                                <a class="dropdown-item text-gray" href="{{ route('objet_connecte') }}">Objets connectés</a>
                                <a class="dropdown-item text-gray" href="{{ route('maintenance_hebergement') }}">Maintenances et hébergements</a>
                                <!-- Add more dropdown items here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray" href="{{ route('technologie') }}">Technologies</a>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray" href="#">Références</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('portfolio') }}">Portfolio</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray" href="#">Processus</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('processus_intervention') }}">Nos processus d'intervention</a>
                                <a class="dropdown-item text-gray" href="{{ route('vision_methodologique') }}">Nos visions méthodologique</a>
                                <a class="dropdown-item text-gray" href="{{ route('dispositif') }}">Nos dispositifs</a>
                                <!-- Add more dropdown items here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link text-gray" href="{{ route('blog') }}"><small>Blog</small></a>
                    <a class="nav-link btn-outline-primary rounded-pill" href="{{ route('rejoindre_stack') }}"><small>Rejoindre Stack-X</small></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <div id="work_banner" class="banner-wrapper bg-light w-100 py-5">
        <div class="banner-vertical-center-work container text-light d-flex justify-content-center align-items-center py-5 p-0">
            <div class="banner-content col-lg-8 col-12 m-lg-auto text-center">
                <h1 class="banner-heading h2 display-3 pb-5 semi-bold-600 typo-space-line-center">Our Work</h1>
                <h3 class="h4 pb-2 regular-400">Elit, sed do eiusmod tempor incididunt</h3>
                <p class="banner-body pb-2 light-300">
                    Vector illustration <a class="text-white" href="http://freepik.com/" target="_blank">Freepik</a>.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                    commodo viverra maecenas accumsan lacus.
                </p>
                <button type="submit" class="btn rounded-pill btn-outline-light px-4 me-4 light-300">Learn More</button>
                <button type="submit" class="btn rounded-pill btn-secondary text-light px-4 light-300">Contact Us</button>
            </div>
        </div>
    </div>
    <!-- End Banner Hero -->

    <!-- Start Our Work -->
    <section class="container py-5">
        <div class="row justify-content-center my-5">
            <div class="filter-btns shadow-md rounded-pill text-center col-auto">
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4 active" data-filter=".project" href="#">All</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".business" href="#">Business</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".marketing" href="#">Marketing</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".social" href="#">Social Media</a>
                <a class="filter-btn btn rounded-pill btn-outline-primary border-0 m-md-2 px-md-4" data-filter=".graphic" href="#">Graphic</a>
            </div>
        </div>

        <div class="row projects gx-lg-5">
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing social business">
                <div class="service-work overflow-hidden card mb-5 mx-5 m-sm-0">
                    <img class="card-img-top" src="/img/our-work-01.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-01.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-01.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Digital Marketing</h5>
                        <p class="card-text light-300 text-dark">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolor.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project graphic social">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="/img/our-work-02.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-02.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-02.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Branding</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="/img/our-work-03.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-03.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-03.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Leading Digital Solution</h5>
                        <p class="card-text light-300 text-dark">
                            Duis aute irure dolor in reprehenderit in voluptate velit
                            esse cillum dolore eu fugiatdolore eu fugiat nulla pariatur.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project social business">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="/img/our-work-04.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-04.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-04.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Smart Applications</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="/img/our-work-05.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-05.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-05.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">Corporate Stationary</h5>
                        <p class="card-text light-300 text-dark">
                            Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
            <a href="work-single.blade.php" class="col-sm-6 col-lg-4 text-decoration-none project marketing graphic">
                <div class="service-work overflow-hidden card mx-5 mx-sm-0 mb-5">
                    <img class="card-img-top" src="/img/our-work-06.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-06.jpg" alt="...">
                    <img class="card-img-top" src="/img/our-work-06.jpg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title light-300 text-dark">8 Financial Tips</h5>
                        <p class="card-text light-300 text-dark">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <span class="text-decoration-none text-primary light-300">
                              Read more <i class='bx bxs-hand-right ms-1'></i>
                          </span>
                    </div>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="btn-toolbar justify-content-center pb-4" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary text-white">Previous</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-light">1</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary text-white">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary text-white">Next</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Work -->

    <!-- Start Feature Work -->
    <section class="bg-light py-5">
        <div class="feature-work container my-4">
            <div class="row d-flex d-flex align-items-center">
                <div class="col-lg-5">
                    <h3 class="feature-work-title h4 text-muted light-300">Featured Work</h3>
                    <h1 class="feature-work-heading h2 py-3 semi-bold-600">Transform with us</h1>
                    <p class="feature-work-body text-muted light-300">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                        ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p class="feature-work-footer text-muted light-300">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="col-lg-6 offset-lg-1 align-left">
                    <div class="row">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-1-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-1-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-1-large.jpg">
                            <img class="img-fluid" src="/img/feature-work-1.jpg">
                            <img class="img-fluid" src="/img/feature-work-1.jpg">
                            <img class="img-fluid" src="/img/feature-work-1.jpg">
                        </a>
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-2-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-2-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-2-large.jpg">
                            <img class="img-fluid" src="/img/feature-work-2.jpg">
                            <img class="img-fluid" src="/img/feature-work-2.jpg">
                            <img class="img-fluid" src="/img/feature-work-2.jpg">
                        </a>
                    </div>
                    <div class="row pt-4">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-3-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-3-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-3-large.jpg">
                            <img class="img-fluid" src="/img/feature-work-3.jpg">
                            <img class="img-fluid" src="/img/feature-work-3.jpg">
                            <img class="img-fluid" src="/img/feature-work-3.jpg">
                        </a>
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-4-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-4-large.jpg">
                        <a class="col" data-type="image" data-fslightbox="gallery" href="/img/feature-work-4-large.jpg">
                            <img class="img-fluid" src="/img/feature-work-4.jpg">
                            <img class="img-fluid" src="/img/feature-work-4.jpg">
                            <img class="img-fluid" src="/img/feature-work-4.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Work -->


    <!-- Start Footer -->
    @include('footer')
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Lightbox -->
    <script src="/js/fslightbox.js"></script>
    <script src="/js/fslightbox.js"></script>
    <script src="/js/fslightbox.js"></script>
    <script>
        fsLightboxInstances['gallery'].props.loadOnlyCurrentSource = true;
    </script>
    <!-- Load jQuery require for isotope -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="/js/isotope.pkgd.js"></script>
    <script src="/js/isotope.pkgd.js"></script>
    <script src="/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="/js/templatemo.js"></script>
    <script src="/js/templatemo.js"></script>
    <script src="/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/js/custom.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/custom.js"></script>

</body>

</html>
