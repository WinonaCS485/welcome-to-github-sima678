 <?php
$servername = "localhost";
$username = "sx6525ir";
$password = "sx6525ir";
$dbname = "sx6525ir_adi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Age, Sex, BMI1, BMI2, BMI3 FROM Table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["studentID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
 <?php
$servername = "localhost";
$username = "sx6525ir";
$password = "sx6525ir";
$dbname = "sx6525ir_adi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Age, Sex, BMI1, BMI2, BMI3 FROM Table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["personID"]. " - Age: " . $row["Age"];
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
 <?php
$servername = "localhost";
$username = "sx6525ir";
$password = "sx6525ir";
$dbname = "sx6525ir_adi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Age, Sex, BMI1, BMI2, BMI3 FROM Table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["studentID"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
