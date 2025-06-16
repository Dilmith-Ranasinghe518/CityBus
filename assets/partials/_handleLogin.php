<?php
require '_functions.php';
$conn = db_connect();

if (!$conn) {
    die("Oh Shoot!! Connection Failed");
}

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE user_name='$username';";
        $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Something went wrong. Try again.";
        exit;
    }

    if (mysqli_num_rows($result) === 0) {
        // Username not found
        echo "Username does not exist.";
        header("Refresh: 2; URL=../../index.php?error=user_not_found");
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    $storedPassword = $row['user_password'];

    if ($password !== $storedPassword) {
        // Wrong password
        echo "Incorrect password.";
        header("Refresh: 2; URL=../../index.php?error=wrong_password");
        exit;
    }

    //Login successful
    session_start();
    $_SESSION["loggedIn"] = true;
    $_SESSION["user_id"] = $row["user_id"];

    header("Location: ../../admin/dashboard.php");
    exit;
}
?>
