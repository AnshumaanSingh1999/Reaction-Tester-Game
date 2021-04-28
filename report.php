<?php
header("X-XSS-Protection: 1; mode=block");

session_start();
?>
<html>
<head>
<title>Reaction Timer Tester Game</title>

    <style type="text/css">
            
            body {
                
                font-family: sans-serif;
                
            }
        
            #shape {
                
                width: 200px;
                height: 200px;
                background-color: red;
                display: none;
                position: relative;
                
            }
            
            .bold {
                
                font-weight: bold;
                
            }
        
        </style>
    
</head>
<body>

<?php
    error_reporting(0);

if($_SESSION["username"]) {
?>
Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
    
    
    <h1>Test Your Reactions!</h1>
        <p>Click on the boxes and circles as quickly as you can!</p>
        <p class="bold">Your time: <span id="timeTaken"></span></p>
        <div id="shape"></div>
     <script type="text/javascript" src="effects.js"> </script>
   
    
    
<?php
}else header("Location:index.php");
?>
</body>
</html>

