<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'shinestarz' 
); 
 
// DB table to use 
$table = 'registeration'; 
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'name', 'dt' => 0 ), 
    array( 'db' => 'age',  'dt' => 1 ), 
    array( 'db' => 'members','dt' => 2 ), 
    array( 'db' => 'gender','dt' => 3 ), 
    array( 'db' => 'email','dt' => 4 ), 
    array( 'db' => 'mobile','dt' =>5 ), 
    array( 'db' => 'city','dt' => 6 ), 
    array( 'db' => 'state','dt' => 7 )
); 
 
$searchFilter = array(); 
if(!empty($_GET['search_keywords'])){ 
    $searchFilter['search'] = array( 
        'name' => $_GET['search_keywords'], 
        'age' => $_GET['search_keywords'], 
        'members' => $_GET['search_keywords'], 
        'gender' => $_GET['search_keywords'],
        'email' => $_GET['search_keywords'], 
        'mobile' => $_GET['search_keywords'], 
        'city' => $_GET['search_keywords'], 
        'state' => $_GET['search_keywords'] 
    ); 
} 
if(!empty($_GET['filter_option'])){ 
    $searchFilter['filter'] = array( 
        'name' => $_GET['filter_option'] 
    ); 
} 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns, $searchFilter ) 
);