<?php

#Page Header
$siteTitle = 'Order an IKEA catalogue';
include('includes/header_webmaster.php');
$ikealink = 'http://onlinecatalogueasia.ikea.com/AU/en/IKEA_Catalogue/?index';


 ?>
 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');

 $getList = "SELECT id, prod_name, description FROM product ";
$result = $dbc->query($getList);
  ?>
<div class="container">
  <h1 class="font-weight-bold">Webmaster</h1>

<p class="lead">Add a catalogue to the list</p>
<small>Note:If you want to add a preview image, upload it in img file with a coresponding id number</small>

  <div class="row">


  <div class="text-center col-md-6 justify-content-center">
  <form action="webmaster_success.php" method="post">
<div class="form-group row">
 <label for="prod_name" class="col-md-3 col-form-label">Catalogue Name:</label>
  <div class="col-md-9">
 <input type="text" name="prod_name" id="prod_name" class="form-control">
</div>
</div>
<!--  Publisher Name -->
<div class="form-group row">
 <label for="description"class="col-md-3 col-form-label">Catalogue Description:</label>
 <div class="col-md-9">
 <input type="text" name="description" id="description" class="form-control">
</div>
</div>
<!--  Publisher Website -->
<div class="form-group row">
 <label for="price"class="col-md-3 col-form-label">Catalogue Price:</label>
 <div class="col-md-9">
     <input class="form-control" type="text" name="price" id="price"  >
</div>
</div>
<!--  Publisher Website -->

  <input type="submit" value="Add a new Catalogue" class="btn btn-success">
</div>
  </div>

</form>
<aside class="publisher"></aside>

</div>
<?php
mysqli_close($dbc);
include('includes/footer.php');
 ?>
