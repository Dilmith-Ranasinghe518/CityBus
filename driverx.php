<!--Dilmith-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./css/driverxcss.css">
<title>Map Directions</title>
</head>
<body>
    <!-- includeing header using php -->
    <?php include "./header.php" ?>
    <div class="inputs">
        <input type="text" id="start" placeholder="Start Location">
        <input type="text" id="end" placeholder="End Location">
        <button id="showRouteBtn">Show Route</button>
    </div>
    <div class="container">
        <div id="map" style="height: 600px; width: 50%; margin-top: 10px; float: left;"></div>
        <div class="info-container">
		   <div class="info-container">
  
           
            <table id="routeTable">
                <tr>
                    <th>Bus No</th>
                    <td id="distance"></td>
                </tr>
                <tr>
                    <th>From</th>
                    <td id="duration"></td>
                </tr>
                <tr>
                    <th>Where</th>
                    <td id="startAddress"></td>
                </tr>
                <tr>
                    <th>Time</th>
                    <td id="endAddress"></td>
                </tr>
            </table>
        </div>
    
    
    
    
    </div>
    <script src="./js/driverjs.js"></script>
	    //MAP API KEY 
   
</body>
<?php include "./footer.php" ?>
</html>
