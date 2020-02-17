<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Toufein</title>
        <link href="land/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="land/css/one-page-wonder.min.css" rel="stylesheet">

        
    </head>
    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
          <div class="container">
            <a class="navbar-brand" href="#">TOUFEIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                @if (Route::has('login'))
              <ul class="navbar-nav ml-auto">
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                 @if (Route::has('register'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                 @endif
                @endauth
              </ul>
              @endif
            </div>
          </div>
        </nav>

        <header class="masthead text-center text-white">
          <div class="masthead-content">
            <div class="container">
              <h1 class="masthead-heading mb-0">TOUFEIN</h1>
              <h2 class="masthead-subheading mb-0">L'argent à portée, en ligne</h2>
              <a href="#porte" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
            </div>
          </div>
          <div class="bg-circle-1 bg-circle"></div>
          <div class="bg-circle-2 bg-circle"></div>
          <div class="bg-circle-3 bg-circle"></div>
          <div class="bg-circle-4 bg-circle"></div>
        </header>

        <section id="porte">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <img class="img-fluid rounded-circle" src="land/img/01.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <h2 class="display-4">Disposer d'un portefeuille numérique</h2>
                  <p>Pour ceux qui ne l'aurait pas compris, TouFein est cette plateforme qui vous êtes à pouvoir à chaque moment ne plus vous soucier de ce lexique qui vous est tellement étranger prfois pour les noms initiés : Carte Visa, Indisponibilité de retrait de PayPal en Afrique, etc.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="p-5">
                  <img class="img-fluid rounded-circle" src="land/img/02.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <h2 class="display-4">Assez de partenaires !</h2>
                  <p>Une des raisons pour laquelle vous devez nous choisir est juste le fait que nous disposons de nombreux partenaires qui lorsque vous effectuez des achats avec eux, vous recevez des réductions considérables à n'en pas croire vos yeux. Essayez et nous vous assurons que vous l'adopterez tout de suite !</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="p-5">
                  <img class="img-fluid rounded-circle" src="land/img/03.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6 order-lg-1">
                <div class="p-5">
                  <h2 class="display-4">Nous vous soutenons !</h2>
                  <p>Par notre système continue d'aide et de support, nous sommes toujours à l'affus d'informations pouvant nous aider à mieux vous servir, à être de plus en plus pertinents sur le marché de la disponibilité de ressources financières.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Footer -->
        <footer class="py-5 bg-black">
          <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; Tous droits réservés : Toufein 2020</p>
          </div>
          <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="land/vendor/jquery/jquery.min.js"></script>
        <script src="land/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
