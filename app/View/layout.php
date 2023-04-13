<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Gustavo Pelaez">
  <title>Gustavo Pelaez - Progi.com</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    dt {
        font-weight: bold;
    }

    dl,
    dd {
        font-size: 0.9rem;
    }

    dd {
        margin-bottom: 1em;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="text-center" src="/assets/img/progi_logo.png" alt="" width="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="/home">Bids Calculator</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="main-content" style="margin-top: 100px">
    <div class="container ">
      <div class="row align-items-center pt-4 pb-4">
        <?php require_once $content; ?>
      </main>
      <!-- /END THE FEATURETTES -->
      <!-- FOOTER -->
      <hr class="featurette-divider">
      <footer class="container">
        <div class="row">

          <p class="float-end"><a href="#">Back to top</a></p>
          <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </div>
      </footer>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

</html>