<?php
    // Admin JSON
    $adminSql = "SELECT * from users";
    $resultAdminSql = mysqli_query($conn, $adminSql);
    $arr = array();
    while($row = mysqli_fetch_assoc($resultAdminSql))
        $arr[] = $row;
    $adminJson = json_encode($arr);
?>