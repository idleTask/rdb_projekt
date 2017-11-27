 <?php

$servername = "pstud0.mt.haw-hamburg.de";
$username = "acc036";
$password = "acc036";
$dbname = "acc036";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Produktionsbereich_ID, Produktionsbereich FROM Produktionsbereiche";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	$rows = array();
    while($row = $result->fetch_assoc()) {
		$rows[] = $row;	
    }	
} else {
    echo "0 results";
}

echo '<div id=data>';

//echo json_encode($rows);
echo '</div>';
$produktionsbereiche = array();
foreach($rows as $result) {
				//echo $result['Produktionsbereich'];
				$produktionsbereiche[] = $result['Produktionsbereich'];
} 



?> 
<script>
	
</script>



