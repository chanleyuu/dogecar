<?php

?>


<html lang = "en">
<?php
/*
    <head>
        <table id="banner">
	<tr>
<th>
<img src="../res/dogehead.png" alt="HTML5 Icon" style="width:128px;height:128px;" href="index.php">
</th>
<th>
<img src="../res/logo.png" alt="HTML5 Icon" style="width:256px;height:128px;">
</th>
</tr>
</table>
    </head>
   */ ?>
   
<?=template_header('Register')?>
<body>

    <h2>Enter account information</h2>
    <div class = "sign">
    
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ( !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "dogecar";
            

                $conn = new mysqli($servername, $username, $password, $dbname);
            
            
                $fname= $_POST['firstname'];
                $lname = $_POST['lastname'];
                $email = $_POST['email'];
                $uname = $_POST['username'];
                $pass = $_POST['password'];
                $msg = '';
                
                $uname = $_POST['username']; 
                
                $sql = "SELECT id, make, model FROM inventory WHERE make = ".preg_replace('/[^a-zA-Z]/', '', $uname);
                //$conn->bind_param('s', $query);
                $result = $conn->query($sql);
                //$results;

                if ($result->num_rows > 0 && isset($_POST['login'])) {
                // output data of each row
                    echo 'username already exists';
                }
                else {
                //The hash is combination of the username's hash and the password to help obscure the hash
                //This hash is stored in the password collumn to prevent the password from being discovered
                    $passhash = hash('sha512', $_POST['username']).$_POST['password'];
                    
                    if ($_POST['repeatpassword'] == $pass){
                        $sql = $conn->prepare("INSERT INTO customer_account (fname, lname, email, uname, password) values(".$fname.$lname.$email.$uname.hash('sha512', $passhash).")");
                        $sql->execute();
                        
                        echo 'Account has been created';
                    }
                    else {
                        echo 'passwords don\'t match' ;
                    }
                
                }
            } else {
                echo "User name or password is incorrect";
            }
            $conn->close();
		
		}
        ?>
         </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "POST">
            <h4 class = "form-signin-heading"></h4>
            
            <input type = "firstname" class = "form-control"
               name = "firstname" placeholder = "First Name" required>First Name</input>
               </br>
            <input type = "lastname" class = "form-control"
               name = "lastname" placeholder = "Last Name" required>Last Name</input>
               </br>
            <input type = "email" class = "form-control"
               name = "email" placeholder = "email" required>Email</input>
               </br>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" required>Username</input>
               </br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required>Password</input>
               </br>
            <input type = "password" class = "form-control"
               name = "repeatpassword" placeholder = "repeat password" required>Repeat Password</input>
               <br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login" href="complete.php">Create</button>
         </form>
         
      </div> 
      
   </body>
</html>
<?=template_footer()?>
