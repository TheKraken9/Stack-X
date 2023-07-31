<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Stack-X | Technologie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <!-- Load Require CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="/css/boxicon.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">
    <!--

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
    <br>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div>
                        <h2 class="h3 regular-400">
                            Développement de sites
                            et applications web</h2>
                        <p class="light-300"> Nous plaçons l'expérience utilisateur au cœur de nos développements. La
                            meilleure preuve de
                            notre
                            savoir-faire est visible par le nombre d'applications que nous avons sur les stores.
                            Découvrez
                            comment nous pouvons vous accompagner dans vos projets mobiles.</p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 order-last order-md-first">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6  order-first order-md-last">
                    <div>
                        <h2 class="h3 regular-400"> Création de vos applications mobiles</h2>
                        <p class="light-300"> Nous plaçons l'expérience utilisateur au cœur de nos développements. La
                            meilleure preuve de
                            notre
                            savoir-faire est visible par le nombre d'applications que nous avons sur les stores.
                            Découvrez
                            comment nous pouvons vous accompagner dans vos projets mobiles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div>
                        <h2 class="h3 regular-400">Nous réalisons et maintenons vos logiciels</h3>
                            <p class="light-300">Le développement logiciel sur mesure fait partie de notre ADN. L'une de
                                nos
                                grandes priorités est de développer des logiciels robustes et facilement maintenables.
                                Plusieurs éditeurs reconnus nous confient la production et la maintenance de leurs
                                logiciels.

                            </p>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="row">
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                        <div class="col-4 mb-3">
                            <div class="rectangle" style="background: #D9D9D9; height: 95px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>

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
