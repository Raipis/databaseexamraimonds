<?php

#Page Header
$siteTitle = 'Success IKEA catalogue';
include('includes/header.php');


 ?>

 <?php
 #include connectdb/connect to database
 include('sql/connectdb.php');
$query = $_GET['search'];
$getSearching = "SELECT
customer.company_name,
customer.first_name,
customer.last_name,
 customer.address_1,
 customer.address_2,
 product.prod_name,
 product.price,
 customer_order.timeofpurchase
  FROM customer INNER JOIN customer_order ON customer_order.customerid=customer.id INNER JOIN product ON customer_order.productid=product.id WHERE `prod_name` LIKE '%".$query."%' OR `first_name` LIKE '%".$query."%' OR `last_name` LIKE '%".$query."%' ;";
 $resultsearch = $dbc->query($getSearching);


?>
  <div class="container">
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

     while($row = mysqli_fetch_array($resultsearch))
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
