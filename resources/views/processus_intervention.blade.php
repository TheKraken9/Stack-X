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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Font CSS -->
    <link href="/css/boxicon.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
    <link rel="stylesheet" href="/css/style.css">
    <!--

    TemplateMo 561 Purple Buzz

    https://templatemo.com/tm-561-purple-buzz

    -->
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

    <section id="processus" class="services">
        <div class="contanier">
            <div class="sec-top">
                <h1>Notre <span>Approche</span></h1>
            </div>
            <div class="boxs">
                <div class="box">
                    <i class="fas fa-chart-line"></i>
                    <h3>Analyse des besoins</h3>
                    <p>Comprendre les exigences du projet, les fonctionnalités souhaitées, les
                        objectifs commerciaux et les besoins des utilisateurs..</p>
                </div>
                <div class="box">
                    <i class="fas fa-pen"></i>
                    <h3>Maquettage</h3>
                    <p>
                        Le maquettage est le processus de création de représentations visuelles statiques ou
                        interactives pour visualiser la structure, la disposition et l'apparence d'un produit ou d'une
                        interface avant sa réalisation ou son développement complet.</p>
                </div>
                <div class="box">
                    <i class="fas fa-lightbulb"></i>
                    <h3>Conception</h3>
                    <p>La conception est le processus créatif de développement et de planification d'un produit, système
                        ou expérience, en prenant en compte les besoins des utilisateurs. Elle implique l'identification
                        des problèmes, la génération d'idées, la création de prototypes et la réalisation de solutions
                        fonctionnelles et esthétiques.</p>

                </div>
                <div class="box">
                    <i class="fa-solid fa-code"></i>
                    <h3>Developpement</h3>
                    <p> Le développement informatique est le processus de création et de mise en œuvre de logiciels,
                        d'applications ou de systèmes informatiques en utilisant des langages de programmation et des
                        outils pour répondre aux besoins spécifiques des utilisateurs ou des entreprises.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Service -->
    <section class="service-wrapper py-3" id="methodes">
        <div class="container-fluid pb-3">
            <div class="row">
                <h1 class="h1 text-center col-12 py-5 semi-bold-600">Nos
                    <span>visions</span> de Methode Coué
                </h1>
                <div class="service-header col-2 col-lg-3 text-end light-300">
                    <i class='bx bx-gift h3 mt-1'></i>
                </div>
                <div class="service-heading col-10 col-lg-9 text-start float-end light-300">
                    <h2 class="h3 pb-4 typo-space-line">pour garantir
                        que les efforts et les ressources investis dans <br> les projets informatiques</h2>
                </div>
            </div>
            <p class="service-footer textes col-10 offset-2 col-lg-9 offset-lg-3  pb-3  px-2">
                Planifier les actions : Élaborer un plan d'action détaillé pour atteindre chaque objectif, en
                identifiant les étapes à suivre, les ressources nécessaires et les échéances.
                <br>
                Suivre et évaluer les progrès : Mettre en place des mécanismes de suivi pour évaluer régulièrement les
                progrès réalisés vers l'atteinte des objectifs et apporter des ajustements si nécessaire.
                <br>
                Favoriser la collaboration : Impliquer les différentes parties prenantes dans la mise en œuvre des
                projets informatiques en utilisant des méthodes de travail collaboratives.
                <br>
                Améliorer la gestion du changement : Intégrer des pratiques de gestion du changement pour faciliter
                l'adoption des nouvelles technologies et processus par les utilisateurs.
                <br>
                Réduire les risques : Appliquer des pratiques de gestion de projet pour minimiser les risques et les
                problèmes potentiels tout au long du processus.
            </p>
            <br>
            <br>
            <br>
        </div>
    </section>



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
    document.querySelectorAll('.nav-item.dropdown').forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            item.querySelector('.dropdown-menu').classList.add('show');
        });

        item.addEventListener('mouseleave', function() {
            item.querySelector('.dropdown-menu').classList.remove('show');
        });
    });
    </script>
</body>

</html>
