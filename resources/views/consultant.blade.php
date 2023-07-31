<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stack-X | Services</title>
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
                            <a class="dropdown-item text-gray" href="{{ route('site_web') }}">Création application mobile</a>
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
<section class="bg-white py-5 first-section" style="margin-top: 225px; margin-bottom: 235px">
    <div class="container">
        <h1 class="text-center header1-mobile">
            <strong style="color: #d90429">Stack-X</strong> Votre partenaire de confiance
        </h1>
        <h4 class="text-center header3-mobile">
            Expert en conseil et en développement de solutions digitales
        </h4>
    </div>
</section>

<!-- Start Progress -->
<section class="bg-light py-5 mt-5" id="consultant">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 text-center header-mobile">Consultant</h1>
        <div class="creative-content row py-3">
            <div class="text-center">
                <p class="text-muted light-300">
                    Le metier de consultant est un metier qui consiste à conseiller les entreprises dans leur stratégie de développement.
                    Il peut s'agir de conseiller en management, en organisation, en ressources humaines, en marketing, ...
                </p>
                <p>
                    Nous sommes expert dans le domaine du conseil et nous vous accompagnons dans la mise en place de votre stratégie de développement.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-primary rounded-pill shadow px-5 py-2 mx-auto btn-mobile">Contactez-nous</a>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-white py-5 mt-5" id="ui_ux">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 header-mobile">Design D'expérience utilisateur</h1>
        <div class="creative-content row py-3">
            <div class="col-md-4">
                <h5>Fléxibilité</h5>
                <p class="text-muted col-lg-8 light-300">
                    La fléxibilité de nos produits est pour nos developpeurs une qualité essentielle.
                    L'expérience client est au coeur de nos préocupations.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Rapidité</h5>
                <p class="text-muted col-lg-8 light-300">
                    Assurer des temps de réponse rapides pour les interactions de l'utilisateur afin de maintenir son engagement.
                    La visibilité et la rapidité de lecture sont des éléments essentiels pour une bonne expérience utilisateur.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Centré sur vos clients</h5>
                <p class="text-muted col-lg-8 light-300">
                    Mettre l'utilisateur au centre du processus de conception en comprenant ses besoins, ses objectifs et ses préférences pour créer une expérience sur mesure.
                    Nos clients qui sont aussi les votres sont les plus importants pour nous.
                </p>
            </div>
            <div class="creative-progress col-md-12">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/ui-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/ui-02.png" style="width: 40px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/ui-03.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-light py-5 mt-5" id="dev_web_app">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 text-center header-mobile">Developpement web et application</h1>
        <div class="creative-content row py-3">
            <div class="col-md-6">
                <h5>Accessibilité</h5>
                <p class="text-muted col-lg-12 light-300">
                    Rendre les sites web et les applications accessibles à tous les utilisateurs, y compris ceux ayant des capacités différentes, en suivant les normes d'accessibilité.
                    Stack-X vous aide à rendre vos sites web et applications accessibles à tous.
                </p>
            </div>
            <div class="col-md-6">
                <h5>Convivialité</h5>
                <p class="text-muted col-lg-12 light-300">
                    Créer une interface utilisateur conviviale et intuitive, en suivant les principes de conception centrés sur l'utilisateur.
                    La convivialité est un élément essentiel pour une bonne expérience utilisateur.
                </p>
            </div>
            <div class="creative-progress col-md-12">
                <div class="row mt-4 mt-sm-2 text-muted">
                    <div class="col-2">
                        <img src="/img/web-01.png" style="width: 55px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/web-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/web-04.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/desk-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/desk-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/desk-03.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-white py-5 mt-5" id="app_mobile">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 header-mobile">Création application mobile</h1>

        <div class="creative-content row py-3">
            <div class="col-md-7">
                <h5>Credibilité et professionnalisme</h5>
                <p class="text-muted col-lg-8 light-300">
                    Avoir un site web bien conçu donne une image de professionnalisme et de crédibilité à une entreprise ou une organisation. Cela renforce la confiance des clients et des partenaires potentiels.
                    Stack-X vous aide à concevoir un site web qui vous ressemble.
                    Le professionnalisme et la crédibilité sont des points clés pour la réussite de votre entreprise.
                </p>
            </div>
            <div class="col-md-5">
                <h5>Innovation et créativité</h5>
                <p class="text-muted col-lg-8 light-300">
                    La création d'un site web permet aux concepteurs et aux développeurs de faire preuve de créativité et d'innovation dans la conception d'interfaces utilisateur attrayantes et interactives.
                    Notre entreprise vous plongera dans l'innovation et la créativité totale.
                </p>
            </div>
            <div class="creative-progress col-md-12">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/tech-01.png" style="width: 55px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/tech-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/tech-03.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/tech-04.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->


<section class="bg-white py-5 mt-5" id="integration">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 text-center header-mobile">Intégration des systèmes</h1>
        <div class="creative-content row py-3">
            <div class="col-md-4">
                <h5>Correction des problèmes d'intégration</h5>
                <p class="text-muted col-lg-8 light-300">
                    En cas d'erreurs ou de problèmes d'intégration, Stack-X est là pour diagnostiquer et corriger les sources des erreurs ainsi que de rétablir la connectivité entre les systèmes.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Test et validation</h5>
                <p class="text-muted col-lg-8 light-300">
                    La maintenance implique des tests réguliers des intégrations de systèmes pour s'assurer que les données sont transmises correctement et que les processus d'intégration fonctionnent comme prévu.
                </p>
            </div>
            <div class="col-md-4">
                <img src="/img/sys.jpg" style="width: 100%; height: 100%">
            </div>
            <div class="creative-progress col-md-7 text-center">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/sys-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/sys-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/sys-03.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-white py-5 mt-5" id="sig">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 header-mobile">Données géographiques</h1>

        <div class="creative-content row py-3">
            <div class="col-md-4">
                <h5>Visualiser vos données</h5>
                <p class="text-muted col-lg-8 light-300">
                    Cela offre une meilleure compréhension de l'information spatiale et permet aux utilisateurs d'explorer les données de manière visuelle et intuitive.
                    Stack-X vous aide à visualiser vos données afin de vous permettre de mieux gérer vos activités.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Analysez et prennez des décisions</h5>
                <p class="text-muted col-lg-8 light-300">
                    La visualisation des données géographiques sur un site web permet aux utilisateurs d'analyser les tendances spatiales, de repérer des modèles ou des clusters, et d'utiliser ces informations pour prendre des décisions éclairées.
                    C'est pourquoi nous vous aidons à analyser vos données afin de vous permettre de prendre des décisions éclairées.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Faites des suivis en temps réel</h5>
                <p class="text-muted col-lg-8 light-300">
                    Nos produits peuvent afficher des données géographiques en temps réel, telles que la localisation des véhicules, des événements en cours, des conditions météorologiques, etc. Cela offre une mise à jour constante des informations spatiales.
                    Vos données seront à jour et vous pourrez faire des suivis en temps réel.
                </p>
            </div>
            <div class="creative-progress col-md-12">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/sig-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/sig-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/sig-03.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-light py-5 mt-5" id="objet_connecte">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 header-mobile">Objets connectés</h1>

        <div class="creative-content row py-3">
            <div class="col-md-6">
                <h5>Interface utilisateur adaptative</h5>
                <p class="text-muted col-lg-8 light-300">
                    Les objets connectés que nous concevons sont conçus de manière à s'adapter à différentes tailles d'écran, car les utilisateurs peuvent accéder à ces sites depuis des appareils variés, tels que des smartphones, des tablettes, des ordinateurs portables et des écrans intelligents.
                    Tous les jours, de plus en plus d'appareils sont connectés à Internet. Stack-X vous aide à concevoir des interfaces utilisateur adaptatives afin de vous permettre d'atteindre un plus grand nombre d'utilisateurs.
                </p>
            </div>
            <div class="col-md-6">
                <h5>Interactions en temps réel</h5>
                <p class="text-muted col-lg-8 light-300">
                    Nous vous offrons des gadgets afin de fournir des informations en temps réel sur les objets connectés, tels que les capteurs de température, les caméras de sécurité, les appareils de domotique, etc. Les utilisateurs sera en mesure de surveiller et de contrôler leurs objets en temps réel.
                    Stack-X est dans ce domaine depuis des années et vous offre des solutions de qualité.
                </p>
            </div>
            <div class="creative-progress col-md-12">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/objet-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/desk-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/objet-02.png" style="width: 80px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Progress -->

<!-- Start Progress -->
<section class="bg-white py-5 mt-5" id="maintenance">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3 header-mobile">Maintenance et hébergement</h1>
        <div class="creative-content row py-3">
            <div class="col-md-4">
                <h5>Corriger vos bugs</h5>
                <p class="text-muted col-lg-8 light-300">
                    La maintenance permet de détecter et de corriger les bugs, les erreurs de code, les liens brisés et autres problèmes techniques qui pourraient affecter le bon fonctionnement du site web.
                    Les bugs sont indeniablement un problème pour votre site web. Stack-X vous aide à les corriger.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Améliorer vos fonctionnalités</h5>
                <p class="text-muted col-lg-8 light-300">
                    La maintenance permet d'ajouter de nouvelles fonctionnalités et d'améliorer celles existantes pour répondre aux besoins changeants des utilisateurs et améliorer l'expérience utilisateur.
                    Stack-X vous aide à améliorer vos fonctionnalités.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Renforcer votre sécurité</h5>
                <p class="text-muted col-lg-8 light-300">
                    La maintenance comprend également la mise en place de mesures de sécurité pour protéger le site web contre les attaques de piratage, les logiciels malveillants et les vulnérabilités de sécurité.
                    Alors pour la sécurité de vos données, Stack-X est là pour vous.
                </p>
            </div>
            <div class="creative-progress col-md-7">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-3">
                        <img src="/img/heb-01.png" style="width: 90px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/heb-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/heb-03.png" style="width: 100px;height: 60px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Start Progress -->
<section class="bg-white py-5 mt-5">
    <div class="container my-4">
        <h1 class="creative-heading h2 pb-3"></h1>
        <div class="creative-content row py-3">

            <div class="creative-progress col-md-7">
                <div class="row mt-4 mt-sm-2">
                    <div class="col-2">
                        <img src="/img/other-01.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/other-02.png" style="width: 50px;height: 50px">
                    </div>
                    <div class="col-2">
                        <img src="/img/other-03.png" style="width: 50px;height: 50px">
                    </div>
                </div>
            </div>
        </div>
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
