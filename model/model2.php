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

$sql = "SELECT * FROM Energieverbrauch";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
 $energieverbräuche = array();
   while($row = $result->fetch_assoc()) {
   $energieverbräuche[] = $row;
   }
} else {
   echo "0 results";
}

echo '<div id=data>';
echo '</div>';
//$jahre = array();
//foreach($rows as $result) {
       //echo $result['Produktionsbereich'];
//       $jahre[] = $result['Jahr_1995', 'Jahr_1996', 'Jahr_1997', 'Jahr_1998'];
//}


//echo json_encode($energieverbräuche);
?>
