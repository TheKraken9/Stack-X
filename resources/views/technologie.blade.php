<!DOCTYPE html>
<html lang="en">

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
    <style>
    .container-fluid i {
        color: #8d99ae;
        font-size: 40px;
        margin-bottom: 20px;
        float: left;

    }

    .app {
        width: 700px;
        padding-left: 100px;
        border: solid black 1px;
        float: left;
    }

    .service-wrapper h1 {
        margin-right: 10px;
        color: #8d99ae;
    }

    .service-wrapper p {
        color: #444;
        margin-bottom: 50px;
        margin-left: 60px;
    }

    /*  */
    .image {
        border: solid black 1px;
        margin-left: 700px;
        height: 700px;
    }

    .x {
        margin-top: 100px;
    }

    .y {
        margin-top: 200px;
    }
    </style>
    <br>
    <br>
    <br>
    <br>
    <section class="service-wrapper py-3">
        <div class="container-fluid app pb-3">
            <i class="fas fa-globe">
                . </i>
            <h1 class="h1 col-12 semi-bold-600"> Sites
                et <br>applications web</h1>
            <p>Découvrez notre équipe hautement compétente, passionnée et expérimentée,<br> prête à relever tous les
                défis du dévelopement pour créer des solutions innovantes <BR>et de haute qualité qui dépassent vos
                attentes.
            </p>
        </div>
        <div class="image">
            <img src="img/logo hope.png" class="w" width="100px" border="1px">
            <img src="img/logo hope.png" class="x" width="100px" border="1px">
            <img src="img/logo hope.png" class="y" width="100px" border="1px">
            <img src="img/logo hope.png" class="y" width="100px" border="1px">
        </div>
    </section>
    <!-- End Service -->
    <br>
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