<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country = $_GET['country'];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo '<table>';
echo '<tr>';
echo '<th> Country Name</th>';
echo '<th> Continent</th>';
echo '<th> Independence Year</th>';
echo '<th> Head of State</th>';
echo '</tr>';
?>
<?php if (isset($country)) { 
   foreach ($results as $row){
  
  echo '<tr>';
   echo '<td>'; echo $row['name']; echo '</td>';
   echo '<td>'; echo $row['continent']; echo '</td>';
   echo '<td>'; echo $row['independence_year']; echo '</td>';
   echo '<td>' . $row['head_of_state'] . '</td>';
  
  '</tr>';
     } 
    }
echo '</table>';
?>
