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
                            <a class="text-decoration-none dropdown-toggle-no-caret dropdown-toggle px-1 bouton_accueil"
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
                            <a class="text-decoration-none px-1 bouton_accueil  text-gray"
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
                    <h1 class="h2 pb-3 text-primary">Contact</h1>
                    <h3 class="h4 regular-400">Elit, sed do eiusmod tempor</h3>
                    <p class="light-300">
                        Vector illustration is from <a rel="nofollow" href="https://storyset.com/"
                            target="_blank">StorySet</a>.
                        Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
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

        <h1 class="col-12 col-xl-8 h2 text-left text-primary pt-3">Create success campaign with us!</h1>
        <h2 class="col-12 col-xl-8 h4 text-left regular-400">Elit, sed do eiusmod tempor </h2>
        <p class="col-12 col-xl-8 text-left text-muted pb-5 light-300">
            Incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
            gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
            in voluptate.
        </p>

        <div class="row pb-4">
            <div class="col-lg-4">

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="py-3 mb-2 text-center border rounded text-secondary">
                            <i class='display-6 bx bx-news'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9  light-300">
                        <li class="h5 mb-0">Media Contact</li>
                        <li class="text-muted">Mr. John Doe</li>
                        <li class="text-muted">010-020-0340</li>
                    </ul>
                </div>

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-laptop display-6'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Technical Contact</li>
                        <li class="text-muted">Mr. John Stiles</li>
                        <li class="text-muted">010-020-0340</li>
                    </ul>
                </div>

                <div class="contact row mb-4">
                    <div class="contact-icon col-lg-3 col-3">
                        <div class="border py-3 mb-2 text-center border rounded text-secondary">
                            <i class='bx bx-money display-6'></i>
                        </div>
                    </div>
                    <ul class="contact-info list-unstyled col-lg-9 col-9 light-300">
                        <li class="h5 mb-0">Billing Contact</li>
                        <li class="text-muted">Mr. Richard Miles</li>
                        <li class="text-muted">010-020-0340</li>
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
                            <label for="floatingname light-300">Name</label>
                        </div>
                    </div><!-- End Input Name -->

                    <div class="col-lg-6 mb-4">
                        <div class="form-floating">
                            <input type="email" class="form-control form-control-lg light-300" id="floatingemail"
                                name="inputemail" placeholder="Email" required>
                            <label for="floatingemail light-300">Email</label>
                        </div>
                    </div><!-- End Input Email -->

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control form-control-lg light-300" id="floatingsubject"
                                name="inputsubject" placeholder="Subject" required>
                            <label for="floatingsubject light-300">Subject</label>
                        </div>
                    </div><!-- End Input Subject -->

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control light-300" rows="8" placeholder="Message" name="mess"
                                id="floatingtextarea" required></textarea>
                            <label for="floatingtextarea light-300">Message</label>
                        </div>
                    </div><!-- End Textarea Message -->

                    <div class="col-md-12 col-12 m-auto text-end">
                        <button type="submit"
                            class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Send
                            Message</button>
                    </div>

                </form>
            </div>
            <!-- End Contact Form -->


        </div>
    </section>
    <!-- End Contact -->
    <!-- Start Footer -->
    @include('footer')
    <!-- End Footer -->

    <!-- Bootstrap -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- Templatemo -->
    <script src="/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="/js/custom.js"></script>

</body>

</html>
