<?php

#Page Header
$siteTitle = 'Success IKEA catalogue';
include('includes/header.php');


 ?>

 <?php/*
#include connectdb/connect to database
include('sql/connectdb.php');

$publishername = $_POST['publishername'];
$websitename = $_POST['websitename'];

$query = "INSERT INTO publishers
(id, publishername, website) VALUES(NULL, ', $publishername', '$websitename')";
mysqli_query($dbc, $query) or die ('Error querying the db')
*/
  ?>

 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');

 #search var

  $prod_name = $_POST['prod_name'];
  $description = $_POST['description'];
  $price = $_POST['price'];



#Query for artist
$query4 = "INSERT INTO product (id, prod_name, price, description)
VALUES (NULL, '$prod_name', '$price', '$description');";
mysqli_query($dbc, $query4) or die ('Error querying the db');

  ?>
  <div class="container">


<h1 class="display-1">Success</h1>
<p class="lead">Your additions have been saved to the database</p>
<a class="btn btn-success text-light font-weight-bold" href="adminpage.php">See Changes</a>
<a class="display-5" href="adminpage.php">Go Back to admin area</a>
</div>
<?php
mysqli_close($dbc);
include('includes/footer.php');
 ?>
