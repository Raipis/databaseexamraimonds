<?php

#Page Header
$siteTitle = 'Order an IKEA catalogue';
include('includes/header_webmaster.php');
$ikealink = 'http://onlinecatalogueasia.ikea.com/AU/en/IKEA_Catalogue/?index';


 ?>
 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');

 $getSchedule = "SELECT
 customer.company_name,
 customer.first_name,
 customer.last_name,
  customer.address_1,
  customer.address_2,
  product.prod_name,
  product.price,
  customer_order.timeofpurchase
   FROM customer INNER JOIN customer_order ON customer_order.customerid=customer.id INNER JOIN product ON customer_order.productid=product.id;";


$result = $dbc->query($getSchedule);
  ?>
<div class="container">
  <h1 class="font-weight-bold">Webmaster</h1>

<p class="lead">Overview of catalogue sales activity</p>


  <div class="my-5">
<h3>Detailed Description</h3>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Full Address</th>
      <th scope="col">Catalogue name</th>
      <th scope="col">Quantity</th>

    </tr>
  </thead>
  <tbody>
<?php


while($row = mysqli_fetch_array($result))
{
      echo '<tr>';
      echo '<th scope="row">'. $row['first_name'] . ' ' . $row['last_name'] . '</th>';
        echo '<td>'. $row['address_1'] . ' ' . $row['address_2'] . '</td>';
      echo '<td>' . $row['prod_name'] . '</td>';
      echo '<td>' .$row['timeofpurchase'] . '</td>';


      echo '<tr>';

}
?>

</tbody>
</table>
</div>
<?php
mysqli_close($dbc);
include('includes/footer.php');
 ?>
