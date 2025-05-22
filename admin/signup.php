<!-- Show these admin pages only when the admin is logged in -->
<?php  require '../assets/partials/_admin-check.php';   ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Admin</title>
        <link rel="stylesheet" href="../assets/styles/admin.css">
        <link rel="stylesheet" href="../assets/styles/signup.css">
        <?php 
        $page="signup";
    ?>
    </head>
<body>
  <!-- Signup Status -->
            <?php
                if(isset($_GET['signup']))
                {
                    if($_GET['signup'])
                    {
                        // Show success alert
                        echo '<div class="my-0 alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Successful!</strong> Account created successfully
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }

                    elseif($_GET['user_exists'])
                        // Show error alert
                        echo '<div class="my-0 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> Username already exists
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                }
            ?>
   <div id="container">
        <section id="add-admin" class="d-flex align-items-center justify-content-center">
            <div id="signupForm">
            <h2><span>ADD NEW ADMIN<span></h2>
                <form action="../assets/partials/_handleSignup.php" method="POST">
                    <div>
                        <input type="text" name="firstName" placeholder="First Name*">
                        <input type="text" name="lastName" placeholder="Last Name*" required>
                    </div>
                    <div>
                        <input type="text" name="username" placeholder="Username*" required>
                    </div>
                    <div>
                        <input id="password" type="password" name="password" placeholder="Password*" required>
                        <span id="passwordErr" class="error"></span>
                    </div>
                    <div>
                        <input id="confPassword" type="password" name="confPassword" placeholder="Confirm Password*" required>
                        <span id="confPassErr" class="error"></span>
                    </div>
                    <button id="signup-btn" type="submit" name="signup">PROCEED</button><input type="reset" style="cursor: pointer;">
                </form>
            </div>
        </section>
    </div>
    <center>
        <a href="dashboard.php">
            <button style="display: inline-block; padding: 10px 20px; background-color: blue; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Go Back
            </button>
        </a>
    </center>
    <script src="../assets/scripts/admin_signup.js">  
</body>
</html>