<!DOCTYPE html>
<html lang="en">

<head>
    <title>Purple Buzz - Contact Page</title>
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
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-md-between"
                id="navbar-toggler-success">
                <div class="flex-fill mx-xl-4">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none dropdown-toggle-no-caret text-gray dropdown-toggle px-1 bouton_accueil"
                                href="{{ route('index') }}" id="dropdownAccueil" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Accueil</a>
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
                                <a class="dropdown-item text-gray" href="{{ route('ui_ux') }}">Design D'expérience
                                    utilisateur</a>
                                <a class="dropdown-item text-gray" href="{{ route('dev_web_app') }}">Développement web
                                    et application</a>
                                <a class="dropdown-item text-gray" href="{{ route('site_web') }}">Création site web</a>
                                <a class="dropdown-item text-gray" href="{{ route('integration_systeme') }}">Intégration
                                    de systèmes</a>
                                <a class="dropdown-item text-gray" href="{{ route('sig') }}">Données géographiques</a>
                                <a class="dropdown-item text-gray" href="{{ route('objet_connecte') }}">Objets
                                    connectés</a>
                                <a class="dropdown-item text-gray"
                                    href="{{ route('maintenance_hebergement') }}">Maintenances et hébergements</a>
                                <!-- Add more dropdown items here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-1">
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray"
                                href="{{ route('technologie') }}">Technologies</a>
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
                                <a class="dropdown-item text-gray" href="{{ route('processus_intervention') }}">Nos
                                    processus d'intervention</a>
                                <a class="dropdown-item text-gray" href="{{ route('vision_methodologique') }}">Nos
                                    visions méthodologique</a>
                                <a class="dropdown-item text-gray" href="{{ route('dispositif') }}">Nos dispositifs</a>
                                <!-- Add more dropdown items here -->
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-decoration-none px-1 bouton_accueil  "
                                href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link text-gray" href="{{ route('blog') }}"><small>Blog</small></a>
                    <a class="nav-link btn-outline-primary rounded-pill"
                        href="{{ route('rejoindre_stack') }}"><small>Rejoindre Stack-X</small></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Start Banner Hero -->
    <section class="bg-light">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between">
                <div class="contact-header col-lg-4">
                    <h1 class="h2 pb-3 text-primary">Contactez-nous</h1>
                    <h3 class="h4 regular-400">Nous vous prions d'agréer nos salutations.</h3>
                    <p class="light-300">
                        Si vous pouviez prendre un moment pour discuter, nous en serions très
                        reconnaissants. Veuillez nous faire savoir vos disponibilités pour un éventuel appel ou une
                        réunion.
                    </p>
                </div>
                <div class="contact-img col-lg-5 align-items-end col-md-4">
                    <img src="/img/banner-img-01.svg">
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Hero -->


    <!-- Start Contact -->
    <section class="container py-5">

        <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Envoyez-nous un mail</h1>
        <h2 class="col-12 col-xl-8 h4 text-left regular-400">Prennez le temps de nous contacter.</h2>
        <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
            Nous accordons une grande valeur à votre expertise et nous vous serions extrêmement reconnaissants
            si vous pouviez consacrer un peu de votre temps pour discuter de cette question plus en détail.
            Merci de nous faire savoir vos disponibilités pour un bref appel ou une réunion. Nous sommes ouverts
            à toute date et heure qui vous conviennent.
        </p>

        <div class="row pb-4">
            <div class="col-lg-4">

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-envelope display-6'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Stack-X</li>
                        <li class="text-muted">stack.xlab@gmail.com</li>
                        <li class="text-muted">+261 38 47 297 45</li>
                    </ul>
                </div>
                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="py-3 mb-2 text-center border rounded text-secondary">
                            <i class='display-6 bx bx-news'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                        <li class="h5 mb-0">Directeur des resources<br> humaine</li>
                        <li class="text-muted">Mme Emilie RASOANINDRIANA</li>
                        <li class="text-muted">+261 34 66 829 73</li>
                    </ul>
                </div>

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-laptop display-6'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Directeur technique</li>
                        <li class="text-muted">Mr RAJAONARISINA <br>Andriamampiadamanjaka Rado Ny Aina</li>
                        <li class="text-muted">+261 38 47 297 45</li>
                    </ul>
                </div>


            </div>


            <!-- Start Contact Form -->
            <div class="col-lg-8 ">
                <form class="contact-form row" method="post" action="{{url('contact_mail')}}" role="form">
                    {{ csrf_field() }}
                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingname"
                                name="inputname" placeholder="Name" required>
                            <label for="floatingname light-300">Nom * </label>
                        </div>
                    </div><!-- End Input Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="email" class="form-control form-control-lg light-300" id="floatingemail"
                                name="inputemail" placeholder="Email" required>
                            <label for="floatingemail light-300">Email *</label>
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject"
                                name="inputsubject" placeholder="Subject" required>
                            <label for="floatingsubject light-300">Sujet *</label>
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control light-300" rows="8" placeholder="Message" name="mess"
                                id="floatingtextarea" required></textarea>
                            <label for="floatingtextarea light-300">Messages *</label>
                        </div>
                    </div><!-- End Textarea Message -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit"
                            class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Envoyer
                            le
                            message</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->


    <!-- Start Footer -->
    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-3 col-12 align-left">
                    <a class="navbar-brand" href="index.blade.php">
                        <i class='bx bx-buildings bx-sm text-light'></i>
                        <span class="text-light h5">Purple</span> <span class="text-light h5 semi-bold-600">Buzz</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut.
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="http://facebook.com/">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.linkedin.com/">
                                <i class='bx bxl-linkedin-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.whatsapp.com/">
                                <i class='bx bxl-whatsapp-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.flickr.com/">
                                <i class='bx bxl-flickr-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.medium.com/">
                                <i class='bx bxl-medium-square bx-md'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Our Company</h2>
                        <ul class="list-unstyled text-light light-300">
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                    class="text-decoration-none text-light" href="index.blade.php">Home</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                    class="text-decoration-none text-light py-1" href="about.blade.php">About Us</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                    class="text-decoration-none text-light py-1" href="work.blade.php">Work</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i></i><a
                                    class="text-decoration-none text-light py-1" href="pricing.blade.php">Price</a>
                            </li>
                            <li class="pb-2">
                                <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                    class="text-decoration-none text-light py-1" href="contact.html">Contact</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">Our Works</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Branding</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Business</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Marketing</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Social Media</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Digital Solution</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a
                                class="text-decoration-none text-light py-1" href="#">Graphic</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Client</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1"
                                href="tel:010-020-0340">010-020-0340</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1"
                                href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Purple Buzz Company. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light"
                                href="https://templatemo.com/" target="_blank"><strong>TemplateMo</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/js/custom.js"></script>

</body>

</html>