
<?php
	//include connection file 
	include_once("server.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'id',
		1 =>'name',
		2 => 'age',
		3 => 'members',
		4 => 'gender',
		5 =>  'email',
		6 => 'mobile',
		7 => 'country',
		8 => 'city',
		9 => 'state',
		10 => 'photo',
		11 =>  'youtubelink',
		12 => 'facebooklink',
		13 => 'instagramlink'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT * FROM `registeration` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


 	$sqlRec .=  " ORDER BY name";

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch employees data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	