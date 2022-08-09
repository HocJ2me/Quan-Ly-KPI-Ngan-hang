<?php









// Database configuration
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'qlnn';

// Connect with the database
$db =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Get search term
$searchTerm = $_GET['idnv'];
echo "xin chao"

// Get matched data from skills table
$query = mysqli_query($db,"SELECT * FROM nvnh WHERE Manv LIKE '%".$searchTerm."%' ORDER BY MaNV ASC");

// Generate skills data array
$skillData = array();
if(mysqli_affected_rows($db)>0){
    while($row = mysqli_fetch_array($query)){
    		if(in_array($row['tennv'], $skillData))
    				continue;
 array_push($skillData,$row['tennv']);
    }
}

// Return results as json encoded array
echo json_encode($skillData);


    
?>
