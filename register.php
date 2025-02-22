<?php
/*
	* Author: Dr. Jake Rodriguez Pomperada, MAED-IT, MIT, PHD-TM
	* URL: https://www.jakerpomperada.com
	* Email: jakerpomperada@gmail.com
    * Date: February 22, 2025   Saturday  
	* Description: This is a simple CRUD(Create, Read, Update, Delete) using OOP(Object Oriented Programming) in PHP and MySQL
	*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Save User Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Save User Record</h2>
        <div class="card p-4">
            <form action="logic.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Age" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select class="form-select" name="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
