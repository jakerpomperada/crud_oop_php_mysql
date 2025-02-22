<!DOCTYPE html>
<?php 
/*
	* Author: Dr. Jake Rodriguez Pomperada, MAED-IT, MIT, PHD-TM
	* URL: https://www.jakerpomperada.com
	* Email: jakerpomperada@gmail.com
    * Date: February 22, 2025   Saturday  
	* Description: This is a simple CRUD(Create, Read, Update, Delete) using OOP(Object Oriented Programming) in PHP and MySQL
	*/ 

    include('code.php'); 
    $user = new Users();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Using OOP in PHP and MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h2 class="text-center mb-4">CRUD Using OOP in PHP and MySQL</h2>
		
       <div class="d-flex justify-content-end mb-3">
            <a href="register.php" class="btn btn-success">Register New User</a>
        </div>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($user->getData() as $users) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($users->name); ?></td>
                        <td><?php echo htmlspecialchars($users->address); ?></td>
                        <td><?php echo htmlspecialchars($users->age); ?></td>
                        <td><?php echo htmlspecialchars($users->gender); ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $users->id; ?>" class="btn btn-primary btn-sm">Update</a>
                            <a href="delete.php?id=<?php echo $users->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
							 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
	<footer class="bg-primary text-white text-center p-3 mt-5">
        <p>&copy; 2025 Dr. Jake Rodriguez Pomperada | All Rights Reserved</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
