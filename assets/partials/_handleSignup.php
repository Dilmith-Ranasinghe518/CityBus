<?php
    require '_functions.php';

    $conn = db_connect();

    if(!$conn)
        die("Oh Shoot!! Connection Failed");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"]))
    {
        $fullName = $_POST["firstName"] . " " . $_POST["lastName"];
        $username = $_POST["username"];


        // Check if the username already exists
        $user_exists = exist_user($conn, $username);
        $signup_sucess = false;

        if(!$user_exists)
        {

            
            $sql = "INSERT INTO users (user_name, user_fullname, user_password, user_created) VALUES ('$username', '$fullName', '$password', current_timestamp());";



            $result = mysqli_query($conn, $sql);
            
            if($result)
                $signup_sucess = true;
                
        }

        $_SERVER['QUERY_STRING'] = "signup=$signup_sucess&user_exists=$user_exists";
        $url = "../../admin/signup.php?".$_SERVER['QUERY_STRING'];

        // Redirect Page
        header("location:  $url");
    }

?>

