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
    <style>

    </style>
</head>

<body>
    <!-- Header -->
    @include('header')
    <!-- Close Header -->




    <section id="Processus" class="services">
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

    </div>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Service -->
    <section class="service-wrapper py-3" id="méthodologique">
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