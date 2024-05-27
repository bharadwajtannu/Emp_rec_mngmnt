document.addEventListener('DOMContentLoaded', function() {
    // Fetch and display employee records
    fetch('fetch_employees.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('employeeRecords').innerHTML = data;
        });

    // Add employee form submission
    document.getElementById('addEmployeeForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(this);
        fetch('add_employee.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('employeeRecords').innerHTML = data;
            // Clear form fields
            document.getElementById('addEmployeeForm').reset();
        });
    });
});