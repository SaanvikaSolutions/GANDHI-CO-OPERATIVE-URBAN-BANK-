
<?php
include("includes/sidebar.php");
include('./connections/dbconnect.php');

// Define variables to store user input
$username = $password = $confirm_password = '';

// Define variables to store validation error messages
$errors = array('username' => '', 'password' => '', 'confirm_password' => '');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Function to validate user input
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Validate username
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username is required';
    } else {
        $username = validate($_POST['username']);
        // Check if username already exists
        $stmt = $con->prepare("SELECT username FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows > 0) {
            $errors['username'] = 'Username already exists';
        }
        $stmt->close();
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password is required';
    } else {
        $password = validate($_POST['password']);
        // Check for password strength (example: minimum length)
        if (strlen($password) < 8) {
            $errors['password'] = 'Password must be at least 8 characters long';
        }
    }

    // Validate confirm password
    if (empty($_POST['confirm_password'])) {
        $errors['confirm_password'] = 'Please confirm your password';
    } else {
        $confirm_password = validate($_POST['confirm_password']);
        if ($password !== $confirm_password) {
            $errors['confirm_password'] = 'Passwords do not match';
        }
    }

    // If there are no validation errors, proceed to store user information
    if (empty($errors['username']) && empty($errors['password']) && empty($errors['confirm_password'])) {
        // Hash the password
        // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind the SQL statement
        $stmt = $con->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $password);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to a success page or perform other actions as needed
            echo "<script>alert('successfully registerd.'); window.location.href='index.php';</script>";
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body> -->
<div class="content-wrapper">
    <!-- /.content-header -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Register</h2>
                        <form method="post" action="">
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" class="form-control">
                                <small class="text-danger"><?php echo $errors['username']; ?></small>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>" class="form-control">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">Show</button>
                                    </div>
                                </div>
                                <small class="text-danger"><?php echo $errors['password']; ?></small>
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password:</label>
                                <input type="password" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars($confirm_password); ?>" class="form-control">
                                <small class="text-danger"><?php echo $errors['confirm_password']; ?></small>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
