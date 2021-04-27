<?php
    include("header.php");
    ob_start();
    session_start();
?>

<html lang = "en">

    <head>
        
    </head>
    
<body>

    <h2>Enter Username and Password</h2>
    <div class = "sign">
    
        <?php 
            $uname;
            $pass;
            $msg = '';
            
            $sql = $conn->prepare("SELECT * FROM user WHERE name = ? ");
            $conn->bind_param('s', $_POST['username']);
            $result = $conn->query($sql);
            //$results;

            if ($result->num_rows > 0 && isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
            // output data of each row
            $results = array($result->num_rows);
            while($row = $result->fetch_assoc()) {
                //$count = 0;
                //echo "id: " . $row["id"]. " - Name: " . $row["make"]. " " . $row["model"]. "<br>";
                $uname = $row["username"];
                $pass = $row["password"];
                break;
            }
            
            if ($_POST['username'] == $uname && 
                  $_POST['password'] == $pass) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = $uname;
                  
                  echo 'You have entered valid use name and password';
            }
            
        } else {
            echo "User name or password is incorrect";
        }
		$conn->close();
        ?>
         </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username"  
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>
