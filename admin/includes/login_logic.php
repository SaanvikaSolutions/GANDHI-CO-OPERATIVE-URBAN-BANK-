<?php
session_start();
include('../connections/dbconnect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST['username'])) {
        header("Location: login_logic.php?error=Username is required");
        exit();
    } elseif (empty($_POST['password'])) {
        header("Location: login_logic.php?error=Password is required");
        exit();
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $stmt = $con->prepare("SELECT id, username, password FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            session_regenerate_id(true);

            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];

            header("Location: ../index.php");
            exit();
        } else {
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: login.php?error=Incorrect username or password");
        exit();
    }
} else {
    header("Location: ./login.php");
    exit();
}
?>





