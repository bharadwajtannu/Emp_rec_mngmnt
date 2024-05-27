<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h1>Employee Management System</h1>
        <!-- Form to add employee -->
        <hr>
        <form id="addEmployeeForm">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone" required>
            <input type="text" name="department" placeholder="Department" required>
            <button type="submit">Add Employee</button>
        </form>
        <br><br>
        <hr>
        <!-- Display employee records -->
        <div>
            <h2>The Employee Data available are :</h2>
        </div>
        <div id="employeeRecords"></div>
        <br><br>
        <hr>
        <hr>
        <button><a href="logout.php">Logout</a></button>
    </div>

    <script src="script.js"></script>
</body>

</html>