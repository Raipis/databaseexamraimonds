<?php

#Page Header
$siteTitle = 'Success IKEA catalogue';
include('includes/header.php');


 ?>


 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');

 #search var
 $company_name = $_POST['company_name'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address_1 = $_POST['address_1'];
  $address_2 = $_POST['address_2'];
  $suburb = $_POST['suburb'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $product_id = $_POST['product_id'];
  $description = $_POST['description'];
  $price = $_POST['price'];




#Query for artist
$query = "INSERT INTO customer
(id,company_name, first_name, last_name, address_1 , address_2 , suburb,state , zip , phone , email)
VALUES (NULL, '$company_name', '$first_name', '$last_name', '$address_1','$address_2','$suburb','$state','$zip','$phone','$email');";
mysqli_query($dbc, $query) or die ('Error querying the db');
$newid =  mysqli_insert_id($dbc);
echo $product_id ;
$query3 = "INSERT INTO customer_order (id, customerid, productid, timeofpurchase)
VALUES (NULL, $newid, '$product_id', NOW());";
mysqli_query($dbc, $query3) or die ('Error querying the db here');
  ?>
  <div class="container">


<h1 class="display-1">Success</h1>
<p class="lead">You have succesfully ordered a magazine</p>
<a class="btn btn-success text-light font-weight-bold" href="index.php">Go back</a>
</div>

<?php
mysqli_close($dbc);
include('includes/footer.php');
 ?>
