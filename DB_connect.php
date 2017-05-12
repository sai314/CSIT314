<?php

$conn = connectDB();

function connectDB() {
  define ('DBSERVER', 'localhost:3306');
  define ('DBUSER', 'root');
  define ('DBPASS','root');
  define ('DBNAME','CSIT314');
  
  $mysqli = new mysqli(DBSERVER, DBUSER, DBPASS, DBNAME);
		return $mysqli;
}

function executeQuery($conn, $query, $facet) {
  $result = $conn->query($query);
  $i = 0;
  $resultTable = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      
    }
  } 
  return $resultTable;
}

?>


<?php
	
	function total_number_sales()
	{
		echo '<br/>';echo '<br/>';
		$con = @new mysqli ("localhost", "root", "", "csit314");
		if ($con->connect_errno > 0) {
			echo "DB Connection failed: " . $con->connect_error;
			die ();
		}
		$query1 = "select sum(SALECOUNT) from items";  
		$result = $con->query ($query1);
		
		if (!$result)
			die ("Unable to query DB"). $con->connect_error; 
		
		//print_r ($result);
		return $result->fetch_row()[0];
	}
	
	
	
	function profit_store()
	{
		echo '<br/>';echo '<br/>';
		$con = @new mysqli ("localhost", "root", "", "csit314");
		if ($con->connect_errno > 0) {
			echo "DB Connection failed: " . $con->connect_error;
			die ();
		}

		$query1 = "select sum(TOTALSALE) from items";  
		$result = $con->query ($query1);
		
		if (!$result)
			die ("Unable to query DB"). $con->connect_error; 
		
		//print_r ($result);
		return $result->fetch_row()[0];
	}
	
	
	echo total_number_sales();
	echo profit_store();
?>
