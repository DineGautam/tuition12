<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proj";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, lastname FROM application";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>NAME</th><th>GENDER</th>"<th>FATHER'S NAME</th><th>DOB</th><th>PHONE NUMBER</th><th>E-MAIL ID</th><th>PERMANENT ADDRESS</th><th>TEMPORARY ADDRESS</th></tr>;
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["f_name"]. " " . $row["l_name"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["fa_name"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["ph_num"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["p_add"]. "</td><td>" . $row["t_add"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  

</body>
</html>