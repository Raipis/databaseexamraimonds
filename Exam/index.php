<?php

#Page Header
$siteTitle = 'Order an IKEA catalogue';
include('includes/header.php');
$ikealink = 'http://onlinecatalogueasia.ikea.com/AU/en/IKEA_Catalogue/?index';


 ?>
 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');

 $getList = "SELECT id, prod_name, description FROM product ";
$result = $dbc->query($getList);
  ?>
<div class="container">
  <h2 class="display-3">2018 IKEA Catalogue</h2>
<p class="lead">Order a catalogue and get it delivered straight to your door</p>



  <form action="success.php" method="post">
<div class="row">


    <?php
  while($row = mysqli_fetch_array($result))
  {
  echo '<div class="col-md-3">';
    echo "<label>";
    echo '<img class="card-img-top img-fluid" src="img/'. $row['id'] .'.jpg" alt="'. $row['prod_name'] .'">';
    echo '<input type="radio" name="product_id" id="product_id" value=" ' . $row['id'] . '" >';
    echo '</label>';
  echo '<h5>'. $row['prod_name'] . '</h5>';
  "<a href='".$ikealink."'>View online now</a>";
  echo '</div>';
  }
  ?>
  </div>


      <h3>Order a catalogue here</h3>
      <div class="row">
  <div class="text-center col-md-6 justify-content-center">

<div class="form-group row">
 <label for="company_name" class="col-md-3 col-form-label">Company name:</label>
  <div class="col-md-9">
 <input type="text" name="company_name" id="company_name" class="form-control">
</div>
</div>
<!--  Publisher Name -->
<div class="form-group row">
 <label for="first_name"class="col-md-3 col-form-label">*First Name:</label>
 <div class="col-md-9">
 <input type="text" name="first_name" id="first_name" class="form-control">
</div>
</div>
<!--  Publisher Website -->
<div class="form-group row">
 <label for="last_name"class="col-md-3 col-form-label">*Last Name:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="last_name" id="last_name"  >
</div>
</div>
<div class="form-group row">
 <label for="address_1"class="col-md-3 col-form-label">*Address:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="address_1" id="address_1"  >
</div>
</div>
<div class="form-group row">
 <label for="address_2"class="col-md-3 col-form-label">Address 2:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="address_2" id="address_2"  >
</div>
</div>
<div class="form-group row">
 <label for="phone"class="col-md-3 col-form-label">*Phone:</label>
 <div class="col-md-9">
     <input class="form-control" type="tel" name="phone" id="phone"  >
</div>
</div>
<div class="form-group row">
 <label for="email"class="col-md-3 col-form-label">*Email:</label>
 <div class="col-md-9">
     <input class="form-control" type="email" name="email" id="email">
</div>
</div>
<div class="form-group row">
 <label for="suburb"class="col-md-3 col-form-label">Suburb:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="suburb" id="suburb"  >
</div>
</div>
<div class="form-group row">
 <label for="state"class="col-md-3 col-form-label">state:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="state" id="state"  >
</div>
</div>

<div class="form-group row">
 <label for="zip"class="col-md-3 col-form-label">*Postcode:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="zip" id="zip"  >
</div>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">* I agree that IKEA saves my personal information and agree to the IKEA <a href="#">Privacy Policy</a></label>

</div>


<!--  Publisher Website -->

  <input type="submit" value="Submit" class="btn btn-success">
</div>
  </div>

</form>

</div>
<?php
mysqli_close($dbc);
include('includes/footer.php');
 ?>
