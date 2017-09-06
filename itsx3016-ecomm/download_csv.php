<?php

// File: dowmload_csv.php
// Description: Downloads orders as a CSV formated file. 
// ITSX-3016 (Progarmming for E-Commerce)
// Author: bkozdemba@gmail.com

include("./cfg/connect.inc.php");
include("./includes/database/mysql.php");
include("./cfg/general.inc.php");
include("./cfg/appearence.inc.php");
include("./cfg/functions.php");
include("./cfg/category_functions.php");
include("./cfg/language_list.php");

//connect to database
db_connect(DB_HOST,DB_USER,DB_PASS) or die (db_error());
db_select_db(DB_NAME) or die (db_error());

// Query the database for all of the orders. The query performs an inner join
// on the ORDERED_CARTS and ORDERS tables as defined by the constants.
$myquery = "select ".ORDERED_CARTS_TABLE.".name,".ORDERS_TABLE.".order_time,".ORDERED_CARTS_TABLE.".Quantity,".ORDERS_TABLE.".cust_firstname,".ORDERS_TABLE.".cust_lastname from ".ORDERS_TABLE.",".ORDERED_CARTS_TABLE." where ".ORDERS_TABLE.".orderID=".ORDERED_CARTS_TABLE.".orderID";
$q = db_query($myquery) or die (db_error());
 
$filename = "orders.csv";
$delimiter=",";

// Define the html header in order to force a file download.
header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="'.$filename.'";');

// Open the output stream and use the fputcsv() function.
$f = fopen('php://output', 'w');

// Write the column names.   
fputcsv($f, array('Description','Date/Time','Quantity','FirstName', 'LastName'));
    
// Fetch each row from the database and write it to the CSV formatted file.
while ($n = db_fetch_row($q)) {
  fputcsv($f, $n, $delimiter);
}

?>