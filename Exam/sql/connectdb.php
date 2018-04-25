<?php
#Connecting DBMS(mySQL) from localhost with username and pass: root, db: examdb
$dbc = mysqli_connect("localhost","root", "root","examdb")
or die(mysqli_connect_error() );

mysqli_set_charset($dbc, 'utf8');
 ?>
