<?php
// Connect to database (replace with your database credentials)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch budget items
$sql = "SELECT id, item_name, amount, category, date_added FROM budget_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<h2>Budget Items</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Item Name</th><th>Amount</th><th>Category</th><th>Date Added</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["item_name"]."</td>";
        echo "<td>".$row["amount"]."</td>";
        echo "<td>".$row["category"]."</td>";
        echo "<td>".$row["date_added"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>
