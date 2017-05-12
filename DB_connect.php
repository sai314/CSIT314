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
