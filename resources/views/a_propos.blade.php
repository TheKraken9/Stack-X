<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stack-X | A propos</title>
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
                    <li class="nav-item dropdown mx-1 text-gray">
                        <a class="text-decoration-none dropdown-toggle-no-caret dropdown-toggle px-1 bouton_accueil text-gray" href="{{ route('index') }}" id="dropdownAccueil" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accueil</a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil" href="#">Société</a>
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


<!-- Start Service -->
<section class="service-wrapper py-3" style="margin-top: 150px; margin-bottom: 50px;">
    <div class="container-fluid pb-3">
        <div class="row">
            <h1 class="h1 text-center col-12 py-5 semi-bold-600">Qui sommes-nous ?</h1>
        </div>
        <p class="service-footer col-12 offset-2 col-lg-9 offset-lg-2 text-start pb-3 text-muted px-2">
            <strong style="color: #d90429; font-size: x-large">Stack-X</strong> est née dont le but est d'apporter des solutions innovantes et adaptées aux besoins de nos clients. Elle est fondée par des convictions fortes et des valeurs humaines.
        </p>
        <p class="service-footer col-12 offset-2 col-lg-9 offset-lg-2 text-start pb-3 text-muted px-2">
            <strong style="color: #d90429; font-size: x-large">Stack-X</strong> est une entreprise de services numériques (ESN) qui accompagne les entreprises dans leur transformation digitale. Nous sommes spécialisés dans <span class="fw-bold">le développement d’applications web et mobiles, la création de sites web, l’intégration de systèmes, la conception d’objets connectés, la maintenance et l’hébergement de solutions informatiques</span>.
            Stack-X par des ingénieurs passionnés par les nouvelles technologies et l’innovation. Nous sommes basés à Madagascar, et nous intervenons dans les quatres coins du monde.
        </p>
    </div>
</section>

<!-- Start Progress -->
<section class="bg-light py-5" style="margin-top: 50px; margin-bottom: 50px" id="qui">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 h1 col-12 py-5 semi-bold-600">
            Toujours vers l'avant
        </h1>
        <div class="creative-content row py-3">
            <div class="col-md-5">
                <p class="text-muted col-lg-8 light-300">
                    Stack-X ne cesse de se développer et de s'améliorer. Nous sommes toujours à la recherche de nouvelles technologies et de nouvelles méthodes pour améliorer nos services.
                </p>
            </div>
            <div class="creative-progress col-md-7">

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Developpement web</h4>
                    </div>
                    <div class="col-6 text-right">66%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Developpement logiciel</h4>
                    </div>
                    <div class="col-6 text-right">66%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Developpement Mobile</h4>
                    </div>
                    <div class="col-6 text-right">50%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Système Géographiques</h4>
                    </div>
                    <div class="col-6 text-right">33%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="row mt-4 mt-sm-2">
                    <div class="col-6">
                        <h4 class="h5">Système et Réseaux / Cloud</h4>
                    </div>
                    <div class="col-6 text-right">35%</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Team Member -->
<section class="container py-5" style="margin-top: 50px;margin-bottom: 50px" id="equipe">
    <div class="pb-3 d-lg-flex align-items-center gx-5">

        <div class="col-lg-3">
            <h2 class="h2 py-5 typo-space-line h1 col-12 py-5 semi-bold-600">Notre équipe</h2>
            <p class="text-muted light-300">
                Nous sommes composé de trois personnes passionnés par les nouvelles technologies et l’innovation.
            </p>
        </div>

        <div class="col-lg-9 row">
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="/img/team-01.jpg" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li class="text-dark">ANDRIANAMBININA Fenitra T.</li>
                    <li>Chef de la direction</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="/img/team-02.jpg" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li class="text-dark">RAJAONARISINA A. Rado Ny Aina</li>
                    <li>Directeur des nouvelles technologies</li>
                </ul>
            </div>
            <div class="team-member col-md-4">
                <img class="team-member-img img-fluid rounded-circle p-4" src="/img/team-03.jpg" alt="Card image">
                <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                    <li class="text-dark">RAJAOHARISAONA Mamison</li>
                    <li>Directeur des développements et Etudes</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Team Member -->

<!-- Start Feature Work -->
<section class="bg-light py-5" id="naissance">
    <div class="feature-work container my-4">
        <div class="row d-flex d-flex align-items-center">
            <div class="col-lg-6 align-left">
                <div class="row">
                    <a class="col offset-1" data-type="image" data-fslightbox="gallery" href="">
                        <img class="img-fluid rounded-3" src="/img/apple-icon.png" style="width: 400px; height: 400px" >
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <h3 class="feature-work-title h4 text-muted light-300">Stack-X créée en 2023</h3>
                <h1 class="feature-work-heading h2 py-3 semi-bold-600">Transformation digitale</h1>
                <p class="feature-work-body text-muted light-300">
                    L'entreprise combine les dernières technologies avec une approche créative et une expertise métier pour aider les entreprises à se transformer et à s'améliorer.
                    <br><strong>Stack-X</strong> vise à être un partenaire de confiance pour les entreprises qui souhaitent innover et se développer grâce à la technologie.
                    <br>Notre Entreprise garantie la qualité de ses services et la satisfaction de ses clients.
                </p>
                <p class="feature-work-footer text-muted light-300">
                    Stack-X est en pleine croissance et nous sommes toujours à la recherche de nouveaux talents pour rejoindre notre équipe.
                    Nous sommes spécialisés dans <strong>le développement d’applications web et mobiles, <strong>la création de sites web</strong>, <strong>l’intégration de systèmes</strong>, <strong>la conception d’objets connectés</strong>, <strong>la maintenance et l’hébergement de solutions informatiques</strong>.
                </p>
                <a class="btn btn-outline-primary rounded-pill float-end" href="{{ route('rejoindre_stack') }}">Rejoindre Stack-X</a>
            </div>
        </div>
    </div>
</section>
<!-- End Feature Work -->

<!-- Start Our Partner -->
<section class="py-3" style="margin-bottom: 100px" id="partenaire">
    <div class="container py-5">
        <h2 class="h2 text-dark text-center py-5">Notre partenaires</h2>
        <p class="feature-work-body text-muted text-center light-300">
            Nous travaillons avec des partenaires de confiance pour fournir des solutions de bout en bout à nos clients.
        </p>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-buildings'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 bx text-white bxs-check-shield bx-lg'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-bolt-circle'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-spa'></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our Partner-->


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
