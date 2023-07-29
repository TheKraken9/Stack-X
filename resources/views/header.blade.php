<nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand h1" href="{{ route('index') }}">

            <span class="text-dark h4">Stack-</span><span class="text-primary h4"><strong>X</strong></span>
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
                        <a class="text-decoration-none px-1 bouton_accueil text-gray"
                            href="{{ route('a_propos') }}">Société</a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#propos">À propos</a>
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#equipe">L'équipe</a>
                            <a class="dropdown-item text-gray" href="{{ route('a_propos') }}#pourquoi">Pourquoi
                                Stack-X</a>
                            <a class="dropdown-item text-gray"
                                href="{{ route('a_propos') }}#partenaires">Partenaires</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil  text-gray"
                            href="{{ route('consultant') }}">Services</a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray"
                                href="{{ route('consultant') }}#consultant">Consultant</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#ui_ux consultant">Design
                                D'expérience
                                utilisateur</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#web">Développement
                                web
                                et application</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#integration">Intégration
                                de systèmes</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#sig">Données
                                géographiques</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#objet">Objets
                                connectés</a>
                            <a class="dropdown-item text-gray" href="{{ route('consultant') }}#maintenance">Maintenances
                                et hébergements</a>
                            <!-- Add more dropdown items here -->
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil  text-gray"
                            href="{{ route('technologie') }}">Technologies</a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil  text-gray"
                            href="{{ route('portfolio') }}">Références</a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray" href="{{ route('portfolio') }}#Portfolio">Portfolio</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="text-decoration-none px-1 bouton_accueil  text-gray"
                            href="{{ route('processus_intervention') }}">Processus</a>
                        <div class="dropdown-menu border-0 shadow-lg" aria-labelledby="dropdownAccueil">
                            <div class="dropdown-arrow"></div>
                            <!-- Dropdown menu items -->
                            <a class="dropdown-item text-gray"
                                href="{{ route('processus_intervention') }}#Processus">Nos
                                processus d'intervention</a>
                            <a class="dropdown-item text-gray"
                                href="{{ route('processus_intervention') }}#méthodologique">Nos visions de Methode
                                Coué</a>
                            <!-- Add more dropdown items here -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-decoration-none px-1 bouton_accueil text-gray "
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