<?php

ini_set ('display_errors', 'On');
error_reporting(E_ALL);


//Part 1
$servername = "mysql:dbname=tej2;hostsql.njit.edu";
$username = "tej2";
$password = "sCUGMmHv";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
	die ("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

}


//Part 2

$result = $conn->query("SELECT * FROM accounts where id<6");

//Part 3

if ($result->number_rows > 0) {
	$html .='<table><tr>';
	$html .='<th>ID</th>';
	$html .='<th>Email</th>';
	$html .='<th>First Name</th>';
	$html .='<th>Last Name</th>';
	$html .='<th>Phone</th>';
	$html .='<th>Birthday</th>';
	$html .='<th>Gender</th>';
	$html .='<th>Password</th>';
	$html .='</tr>';
while ($row = $result->fetch_assoc() ) {
        $html .='<tr>';
	$html .='<td>' . $row["id"] .'</td>';
	$html .='<td>' . $row["email"] .'</td>';
	$html .='<td>' . $row["fname"] .'</td>';
	$html .='<td>' . $row["lname"] .'</td>';
	$html .='<td>' . $row["phone"] .'</td>';
	$html .='<td>' . $row["birthday"] .'</td>';
	$html .='<td>' . $row["gender"] .'</td>';
	$html .='<td>' . $row["password"] .'</td>';
	$html .='</tr>';
	}
	$html .='</table>';
	}

print_r($html);

$conn->close();
?>
