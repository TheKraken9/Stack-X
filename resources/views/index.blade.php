<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stack-X | Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon.png">
    <!-- Load Require CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">

TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
    <!-- Dans la section <head> de votre document HTML -->
    <style>

    </style>

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
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="{{ route('a_propos') }}">Société</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#qui">À propos</a>
                                <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#equipe">L'équipe</a>
                                <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#naissance">Pourquoi Stack-X</a>
                                <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#partenaire">Partenaires</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="{{ route('consultant') }}">Services</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#consultant">Consultant</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#ui_ux">Design D'expérience utilisateur</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#dev_web_app">Développement web et application</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#app_mobile">Création application mobile</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#integration">Intégration de systèmes</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#sig">Données géographiques</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#objet_connecte">Objets connectés</a>
                                <a class="dropdown-item text-gray" href="{{ route('consultant') }}#maintenance">Maintenances et hébergements</a>
                                <!-- Add more dropdown items here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="{{ route('technologie') }}">Technologies</a>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="#">Références</a>
                            <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                                <div class="dropdown-arrow"></div>
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item text-gray" href="{{ route('portfolio') }}">Portfolio</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="#">Processus</a>
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
                            <a class="text-decoration-none px-1 bouton_accueil text-gray" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <!--<a class="nav-link text-gray" href="{{ route('blog') }}"><small>Blog</small></a>-->
                    <a class="nav-link btn-outline-primary rounded-pill" href="{{ route('rejoindre_stack') }}"><small>Rejoindre Stack-X</small></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <div class="banner-wrapper bg-light mt-5" style="margin-top: 70px!important;">
        <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">
            <!-- Start slider -->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h2 class="banner-heading h2 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line fs-sm-4">
                                    Tranformez vos <strong>Idées</strong> en une
                                  <br>réalité numérique
                              </h2>
                                <p class="banner-body text-muted py-3 fs-sm-4">
                                    Nous vous accompagnons dans la réalisation de vos projets numériques.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h2 class="banner-heading h2 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    Des solutions <strong>innovantes</strong> pour votre
                                    <br>entreprise
                                </h2>
                                <p class="banner-body text-muted py-3">
                                    Vous avez une idée de projet, nous avons les compétences pour la réaliser.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item active">
                        <div class="py-5 row d-flex align-items-center">
                            <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                                <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-3 mx-0 px-0 light-300">
                                    <strong>Stack-X</strong>
                                    <br>
                                </h1>
                                <h2> est une entreprise de développement logiciel et de conseil en ingénierie informatique.</h2>
                                <p class="banner-body text-muted py-3">
                                    Nous vous accompagnons dans la réalisation de vos projets informatiques.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <i class='bx bx-chevron-left'></i>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <i class='bx bx-chevron-right'></i>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
            <!-- End slider -->

        </div>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Service -->
    <section class="service-wrapper py-3 mt-5" id="commencer">
        <div class="container-fluid pb-3">
            <div class="row">
                <h2 class="h2 text-center col-12 py-5 semi-bold-600">Services et technologies</h2>
                <div class="service-header col-8 col-lg-3 col-sm-1 col-md-1 text-end light-300">
                    <img src="/img/apple-icon.png" style="max-width: 100px;max-height: 100px;" class="rounded-2">
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">Nous pouvons vous offrir plusieurs services</h2>
                </div>
            </div>
            <p class="service-footer col-10 offset-2 col-lg-9 offset-lg-3 text-start pb-3 text-muted px-2">
                Nous vous accompagnons dans la réalisation de vos projets informatiques.
            </p>
        </div>

        <div class="service-tag">
            <div class="col-md-12">
                <ul class="nav d-flex justify-content-center">
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary active text-dark shadow-sm rounded-pill text-light px-4 light-300" href="#" data-filter=".tout">Tout</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary shadow-sm text-dark rounded-pill text-light px-4 light-300" href="#" data-filter=".web">Web</a>
                    </li>
                    <li class="filter-btn nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary shadow-sm text-dark rounded-pill text-light px-4 light-300" href="#" data-filter=".mobile">Mobile</a>
                    </li>
                    <li class="nav-item mx-lg-4">
                        <a class="filter-btn nav-link btn-outline-primary shadow-sm text-dark rounded-pill text-light px-4 light-300" href="#" data-filter=".desktop">Desktop</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="container overflow-hidden py-5 mb-5 bg">
        <div class="row gx-5 gx-sm-1 gx-lg-5 gy-lg-5 gy-sm-2 gy-3 pb-3 projects">
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout mobile">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="/img/tech-01.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout mobile">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="/img/tech-02.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout mobile">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="/img/tech-03.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout mobile">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="service card-img" src="/img/tech-04.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->


            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-01.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-1 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-02.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-03.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-04.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-05.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-06.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-07.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-07.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout web">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/web-08.png" alt="Card image">
                </a>
            </div>
            <!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-01.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-02.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-03.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-04.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-05.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-06.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
            <!-- Start Recent Work -->
            <div class="col-xl-1 col-md-1 col-sm-2 project tout desktop">
                <a href="#" class="service-work card border-0 text-white overflow-hidden mx-5 m-sm-0">
                    <img class="card-img" src="/img/desk-08.png" alt="Card image">
                </a>
            </div><!-- End Recent Work -->
        </div>
        <a class="banner-button btn rounded-pill btn-outline-primary btn-sm px-4 float-end" href="{{ route('consultant') }}#consultant" role="button">Voir plus</a>
    </section>
    <!-- End Service -->

    <div class="recent-work-header text-center">
        <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">
            Nos projets récents
        </h2>
    </div>
    <!-- Start View Work -->
    <section class="bg-secondary">
        <div class="container py-5">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-7 col-12 text-light pt-2">
                    <h3 class="h4 light-300">Nous sommes dans le monde de l'IT</h3>
                    <p class="light-300">
                        Confiez-nous vos projets et nous vous aiderons à les réaliser.
                    </p>
                </div>
                <div class="col-lg-3 col-12 pt-4">
                    <a href="{{ route('portfolio') }}" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2">Voir notre projets</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End View Work -->

    <!-- Start Recent Work -->
    <section class="py-5">
        <div class="container">
            <div class="row gy-5 g-lg-5 mb-4">
                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-01.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Hope Services</h3>
                                <p class="card-text">Site e-commerce et vitrine</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-02.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">E.J.A.</h3>
                                <p class="card-text">Site vitrine</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-03.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">R & D</h3>
                                <p class="card-text">Sum dolor sit consencutur</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            </div>
        </div>
    </section>
    <!-- End Recent Work -->

    <!-- Start Recent Work -->
    <section class="my-5 mb-5 bg-light">
        <div class="container">
            <div class="recent-work-header row text-center pb-5">
                <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5">
                    Blog
                </h2>
            </div>
            <div class="row gy-5 g-lg-5 mb-4">
                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-01.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">Hope Services</h3>
                                <p class="card-text">Site e-commerce et vitrine</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-02.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">E.J.A.</h3>
                                <p class="card-text">Site vitrine</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->

                <!-- Start Recent Work -->
                <div class="col-md-3 mb-3">
                    <a href="#" class="recent-work card border-0 shadow-sm overflow-hidden">
                        <img class="recent-work-img card-img" src="/img/recent-work-03.jpg" alt="Card image">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300">R & D</h3>
                                <p class="card-text">Sum dolor sit consencutur</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Work -->


    <!-- Start Footer -->
    @include('footer')
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="/js/jquery.min.js"></script>
    <!-- Isotope -->
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
    <!-- Custom -->
    <script src="/js/custom.js"></script>
    <script>
        // Enable hover for dropdowns using JavaScript
        document.querySelectorAll('.nav-item.dropdown').forEach(function (item) {
            item.addEventListener('mouseenter', function () {
                item.querySelector('.dropdown-menu').classList.add('show');
            });

            item.addEventListener('mouseleave', function () {
                item.querySelector('.dropdown-menu').classList.remove('show');
            }, 1000);
        });
    </script>
</body>

</html>
