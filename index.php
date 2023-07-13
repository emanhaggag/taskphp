
<!DOCTYPE html>
<html>
<head>
    <title>Form </title>
</head>
<body>
    <?php
    // Define variables 
    $email = '';
    $password = '';

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve the entered email and password
        $email = $_POST["email"];
        $password = $_POST["password"];
    }
    ?>
    
    <h2>Enter your email and password:</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $password; ?>" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <?php
    // Display the entered email and password
    if ($email != '' && $password != '') {
        echo "<h2>Entered data:</h2>";
        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
    ?>
   <!-- <?php
     $cookie_name='php_mode';
    $cookie_value='dark mode';
     setcookie('php_mode' , time() + (86400 * 30), '/');
     session_start();?>
    
  
    
   <?php
   //if (isset($_COOKIE['php_mode'=='dark mode']&&$_COOKIE['php_mode']=='dark mode')){
    ?> <html>
      <titie>
     <link rel="stylesheet" type="text/css" href="styles.css">
   </tittle>
     </html>
    <?php
    //}else{?>
    <html>
      <titie>
   <link rel="stylesheet" type="text/css" href="styles_light.css">
   </tittle>
     </html>
    <?php} -->
  //remove all session variables
  //  session_unset();

  //  // destroy the session
  //   session_destroy();*/}
  //   ?> 
    </body>
    </html>
 
 
    
  
  

    




  
 