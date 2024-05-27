<?php
include 'auth.php';
include 'db_config.php';

// Fetch employees from database
$sql = "SELECT * FROM employees";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<div>" . $row["name"] . " - " . $row["email"] . " - " . $row["phone"] . " - " . $row["department"] . "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>