<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stack-X | Accueil</title>
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
    <style>

    </style>
</head>

<body>
<!-- Header -->
<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
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
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-none d-lg-inline" href="{{ route('a_propos') }}">Société</a>
                        <!-- Affiche le bouton de toggle pour les écrans plus petits -->
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-inline d-lg-none dropdown-toggle" href="#" id="dropdownApropos" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Société
                        </a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownApropos">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#qui">À propos</a>
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#equipe">L'équipe</a>
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#naissance">Pourquoi Stack-X</a>
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#partenaire">Partenaires</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-none d-lg-inline" href="{{ route('consultant') }}">Services</a>
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-inline d-lg-none dropdown-toggle" href="#" id="dropdownService" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownService">
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
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-none d-lg-inline" href="{{ route('portfolio') }}">Références</a>
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-inline d-lg-none dropdown-toggle" href="#" id="dropdownReference" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Références
                        </a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownReference">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray" href="{{ route('portfolio') }}">Portfolio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-none d-lg-inline" href="{{ route('processus_intervention') }}">Processus</a>
                        <a class="text-decoration-none px-1 bouton_accueil text-gray d-inline d-lg-none dropdown-toggle" href="#" id="dropdownProcessus" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Processus
                        </a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownProcessus">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray" href="{{ route('processus_intervention') }}#processus">Nos processus d'intervention</a>
                            <a class="dropdown-item text-gray" href="{{ route('processus_intervention') }}#methodes">Nos visions méthodologique</a>
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


<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="m-auto h2 semi-bold-600 py-5">
                Devenez membre de Stack-X
            </h2>
        </div>
        <div class="row gy-5 g-lg-5 mb-4 col-lg-12 col-md-12 col-sm-10">
            <!-- Start Recent Work -->
            <div class="col-md-2 mb-3 shadow-sm rounded-2 p-5 img-basus">
                <a href="#" class="recent-work service-work card border-0 overflow-hidden text-decoration-none">
                    <div class="">
                        <img class="recent-work-img card-img" src="/img/web-09.png" alt="Card image">
                    </div>
                    <div class="d-flex align-items-end">
                        <div class="text-center mb-3 ml-3 text-dark">
                            <h6 class="card-title light-200 mt-5">Symfony Confirmé</h6>
                            <div class="text-center">
                                <a class="btn btn-outline-primary rounded-pill btn-block shadow-sm px-4 py-2 center-mobile mt-5" href="{{ route('consultant') }}#consultant" role="button"><small>Details</small></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-2 mb-3 shadow-sm rounded-2 p-5 img-basus">
                <a href="#" class="recent-work service-work card border-0 overflow-hidden text-decoration-none">
                    <img class="recent-work-img card-img" src="/img/desk-03.png" alt="Card image">
                    <div class="d-flex align-items-end">
                        <div class="text-center mb-3 ml-3 text-dark">
                            <h6 class="card-title light-200 mt-5">.Net Sénior</h6>
                            <div class="text-center">
                                <a class="btn btn-outline-primary rounded-pill btn-block shadow-sm px-4 py-2 center-mobile mt-5" href="{{ route('consultant') }}#consultant" role="button"><small>Details</small></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Recent Work -->

            <!-- Start Recent Work -->
            <div class="col-md-2 mb-3 shadow-sm rounded-2 p-5 img-basus">
                <a href="#" class="recent-work service-work card border-0 overflow-hidden text-decoration-none">
                    <img class="recent-work-img card-img" src="/img/web-01.png" alt="Card image">
                    <div class="d-flex align-items-end">
                        <div class="text-center mb-3 ml-3 text-dark">
                            <h6 class="card-title light-200 mt-5">React Sénior</h6>
                            <div class="text-center">
                                <a class="btn btn-outline-primary rounded-pill btn-block shadow-sm px-4 py-2 center-mobile mt-5" href="{{ route('consultant') }}#consultant" role="button"><small>Details</small></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="text-center">
                <a href="{{ route('plus_rejoindre') }}" class="btn btn-primary rounded-pill btn-block shadow-sm px-4 py-2 center-mobile mt-5">Voir plus d'annonces</a>
            </div>
            <!-- End Recent Work -->
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
        });
    });
</script>
</body>

</html>
