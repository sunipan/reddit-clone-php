<?php session_start(); ?>
<!DOCTYPE html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />

  <link rel="manifest" href="site.webmanifest" />
  <link rel="apple-touch-icon" href="icon.png" />
  <!-- Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <meta name="theme-color" content="#fafafa" />
</head>
<!-- Uncomment to test signed in login status -->
<?php
// session_start();
// $_SESSION['user'] = 'admin';
?>

<body>
  <header>
    <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand d-flex" href="home.php">
          <img src="img/crosshair.png" alt="" width="30" height="30" />
          <img src="img/font-logo.png" alt="" height="30" />
        </a>
        <a href="home.php" class="text-dark m-auto d-none d-lg-flex">
          <h2 class="m-0"><i class="bi bi-house-fill mx-auto"></i></h2>
        </a>

        <form class="d-none d-md-flex search-form m-auto">
          <input class="form-control me-2 search-bar" type="search" placeholder="Search..." aria-label="Search" />
        </form>
        <?php
        if (!isset($_SESSION['user'])) {
          echo '<a href="login.php" class="d-none d-lg-flex text-decoration-none text-white btn btn-danger me-2">
                  Login
                </a>
                <a href="sign_up.php" class="d-none d-lg-flex text-decoration-none text-white btn btn-dark me-2">
                  Sign Up
                </a>';
        }
        ?>
        <?php
        if (isset($_SESSION['user'])) {
          // If user is logged in, display their profile pic as the icon
          echo '<div data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span>
                    <img class="rounded-circle border border-3 border-danger" src="img/default_profile_pic.png" width="40" height="40" alt="Profile Picture" />
                    <i class="fas fa-caret-down"></i>
                  </span>
                </div>';
        } else {
          // If user isn't logged in, display normal menu icon
          echo '<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>';
        } ?>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <hr class="m-0" />
          <div class="offcanvas-body mt-0">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <?php if (isset($_SESSION['user'])) {
                  // If user isn't logged in, display logout button
                  echo '<li class="nav-item">
                          <a class="nav-link" href="logout.php">Logout</a>
                        </li>';
                } ?>
              </li>
            </ul>
            <form class="d-flex d-md-none">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <!-- <script>
      window.ga = function () {
        ga.q.push(arguments);
      };
      ga.q = [];
      ga.l = +new Date();
      ga("create", "UA-XXXXX-Y", "auto");
      ga("set", "anonymizeIp", true);
      ga("set", "transport", "beacon");
      ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script> -->

  <!-- jQuery Error Checking -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    window.jQuery ||
      document.write('<script src="/js/jquery-3.6.0.min.js"><\/script>');
  </script>

  <!-- Bootstrap Error Checking -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    window.jQuery.fn.modal ||
      document.write(
        '<script src="/js/bootstrap/bootstrap.bundle.min.js"><\/script>'
      );
  </script>
  <script>
    (function($) {
      $(function() {
        if ($("body").css("color") !== "rgb(51, 51, 51)") {
          $("head").prepend(
            '<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">'
          );
        }
      });
    })(window.jQuery);
  </script>
</body>

</html>