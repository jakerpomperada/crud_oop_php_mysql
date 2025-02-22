<!DOCTYPE html>
<?php
	/*
	* Author: Dr. Jake Rodriguez Pomperada, MAED-IT, MIT, PHD-TM
	* URL: https://www.jakerpomperada.com
	* Email: jakerpomperada@gmail.com
    * Date: February 22, 2025   Saturday  
	* Description: This is a simple CRUD(Create, Read, Update, Delete) using OOP(Object Oriented Programming) in PHP and MySQL
	*/
    include 'code.php';
    $data = new Users();
    $newData = $data->getUserById($_GET['id']);
    if(isset($_POST['update'])) {
        $user = array(
            'id'     => intval($_GET['id']),
            'name'   => $_POST['name'],
            'address'=> $_POST['address'],
            'age'    => intval($_POST['age']),
            'gender' => $_POST['gender']
        );
        if($data->updateUserById($user)) {
            echo "<div class='alert alert-success text-center'>User successfully Updated</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Oops?! Something went wrong</div>";
        }
    }
    unset($_POST['update']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Update User Record</h2>
        <div class="card p-4">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo htmlspecialchars($newData->name); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo htmlspecialchars($newData->address); ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo htmlspecialchars($newData->age); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select class="form-select" name="gender">
                        <option <?php echo $newData->gender == "Male" ? "selected" : ""; ?>>Male</option>
                        <option <?php echo $newData->gender == "Female" ? "selected" : ""; ?>>Female</option>
                    </select>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary" name="update">Update</button>
                    <a href='index.php' class="btn btn-secondary">Home</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
