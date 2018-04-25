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
  </div>
  <div class="container  sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white font-weight-bold">
      <a class="navbar-brand" href="index.php"><img src="img/ikea_logo.png" class="img-fluid" width="120px" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">


          <li class="nav-item">
                  <a class="nav-link text-dark mx-3" href="webmaster.php">Add a Catalogue</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link disabled" href="#">Add a product</a>
                 </li>
                <li class="nav-item">
          <a class="nav-link text-danger mx-3" href="webmaster_overview.php">Catalogue Statistics</a>
        </li>
      </ul>
        <form action="webmaster_search.php" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" name="search" id="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>

    </nav>

  </div>
<hr>
