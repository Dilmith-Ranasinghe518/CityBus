<!--Ravidu-->
<!-- Show these admin pages only when the admin is logged in -->
<?php   require '../assets/partials/_admin-check.php';     ?>

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../assets/styles/admin.css">
    <link rel="stylesheet" href="../assets/styles/dashboard.css">
    <?php
        $page="dashboard";
    ?>
</head>
<body>
    <!-- Requiring the admin header files -->
    <?php require '../assets/partials/_admin-header.php';
        require '../assets/partials/_getJSON.php';
    //  Will have access to variables adminJson
    
    $adminData = json_decode($adminJson);

    ?>
    <main id="container">
        <section>
        <div id="sidebar">
        <h4>CityBus</h4>
            <div>
                <img class="adminDp" src="../assets/img/userav-min.png" height="125px" alt="Admin Profile Pic">
                <p>
                    <?php  echo '@'.$user_name;  ?>
                </p>
                <p>System Admin</p>
            </div>
            <ul id="options">
                <li class="option"> 
                    <a href="./dashboard.php">Dashboard</a>
                </li>
                <li class="option">
                    <a href="./../pform.php">Passenger</a>
                </li>
                <li class="option">
                    <a href="./../busf.php">Bus</a>
                </li>
                <li class="option">
                    <a href="./../indexxx.php">Add Driver</a>
                </li>
                <li class="option ">
                    <a href="./../admin_schedual.php">Schedule</a>
                </li>
                <li class="option">
                    <a href="./../rform.php">Reservation</a>
                </li>
                <li class="option">
                    <a href="./signup.php">Add New Admin</a>
                </li>
                <li class="option">
                    <a href="./../driverx.php">View As Driver</a>
                </li>
            </ul>
        </div>
        
        <!-- Main content -->
        <div id="main-content">
            <section id="welcome">
                <ul>
                    <li class="welcome-item">Welcome, 
                        <span id="USER">
                            <?php echo $user_fullname; ?>
                        </span>
                    </li>
                    <li class="welcome-item" style="float: right;">
                        <button id="logout" class="btn-sm" style="background-color: red; color: white;">
                            <a href="../assets/partials/_logout.php">LOGOUT</a>
                        </button>
                    </li>
                </ul>
                <div id="Admin" class="info-box user-item">
            <div class="heading">
                <h5>Admins</h5>
            </div>
                <div class="info-content">
                <p>Total Admins</p>
                <p class="num" data-target="<?php 
                    echo count($adminData);
                    ?>">
                    999
                </p>
                </div><a href="#admin">View More</a></div>
            </div>
            <section>
            <section style= "display: flex; margin-left:300px">
                <h4>Other Admin</h4>
                <div id="admin">
                    <?php 
                        // Loop through Admin Data and show the admins in boxes other than the existing admin which is $user_id  == $_SESSION["user_id"]
                        foreach($adminData as $admin)
                        {
                            $adminArr = get_object_vars($admin);
                            if($adminArr["user_id"] == $user_id) 
                                continue;
                            $username = $adminArr["user_name"];
                        ?>
                            <div style="margin-left: 15%;"class="info-box admin-item">
                                <img src="../assets/img/user-profile-min.png" height="100px" alt="Profile Pic">
                                <h4><?php echo $username; ?></h4>
                                <p class="bio">Other Admin</p>
                            </div>
                        <?php 
                        }
                    ?>
                </div>
            </section>
        </div>
            </section>
            </section>
        </div>
    </main>
    <script src="../assets/scripts/admin_dashboard.js"></script>
</body>
</html>