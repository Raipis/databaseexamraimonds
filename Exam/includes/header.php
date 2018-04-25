<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="scss/app.css">
  <title><?php $siteTitle ?></title>
</head>
<body>
  <!--Navigation -->
  <div class=" d-none d-md-block">

<small>
<ul class="list-inline text-center my-2">
    <a class="list-inline-item text-dark" href="#">IKEA FAMILY</a>
    <a class="list-inline-item text-dark" href="#">IKEA BUSINESS</a>
    <a class="list-inline-item text-dark" href="#">Your IKEA locations</a>
    <a class="list-inline-item text-dark" href="#">Customer Services</a>
    <a class="list-inline-item text-dark" href="#">Shopping List</a>
    <a class="list-inline-item text-danger font-weight-bold" href="webmaster.php">Webmaster Login</a>

</ul>
</small>
<hr>
  </div>
  <div class="container  sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white font-weight-bold">
      <a class="navbar-brand" href="index.php"><img src="img/ikea_logo.png" class="img-fluid" width="120px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark mx-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark mx-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Rooms
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
                  <a class="nav-link text-dark mx-3" href="#">This is IKEA</a>
                </li>
                <li class="nav-item">
          <a class="nav-link text-danger mx-3" href="#">New Lower Prices</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" disabled>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"disabled>Search </button>
        </form>
      </div>

    </nav>

  </div>
<hr>
