

<?php
    //include("header.php");
   // ob_start();
   // session_start();
?>
<?=template_header('Login')?>

<html lang = "en">
 <?php /*
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
<body>

    <h2>Enter Username and Password</h2>
    <div class = "sign">
    
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ( !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "shoppingcart";
            

                $conn = new mysqli($servername, $username, $password, $dbname);
                
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $uname;
                $pass;
                $msg = '';
                
                $query = $_POST['username']; 
                
                $sql = $pdo->prepare("SELECT * FROM customer_account WHERE uname = '".preg_replace('/[^a-zA-Z]/', '', $query)."'");
                //$conn->bind_param('s', $query);
                $sql->execute();
                $result = $sql->fetchAll(PDO::FETCH_ASSOC);
                //$results;

                if (count($result) > 0 && isset($_POST['login'])) {
                // output data of each row
               // $results = array($result->num_rows);
                    foreach ($result as $value) {
                        //$count = 0;
                        //echo "id: " . $row["id"]. " - Name: " . $row["make"]. " " . $row["model"]. "<br>";
                        $uname = $value["uname"];
                        $pass = $value["password"];
                        break;
                    }
                
                //The hash is combination of the username's hash and the password to help obscure the hash
                //This hash is stored in the password collumn to prevent the password from being discovered
                $passhash = hash('sha512', $_POST['username']).$_POST['password'];
                
                if ($_POST['username'] == $uname && 
                    hash('sha512', $passhash) == $pass) {
                    $_SESSION['valid'] = true;
                    $_SESSION['timeout'] = time();
                    $_SESSION['username'] = $uname;
                    
                    echo 'You have entered valid use name and password';
                }
                
            } else {
				$passhash = hash('sha512', $_POST['username']).$_POST['password'];
                echo hash('sha512', $passhash)."<br>";
                echo "User name or password is incorrect";
            }
            $conn->close();
		
		}
		}
        ?>
         </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
             method = "POST">
            <h4 class = "form-signin-heading"></h4>
             <input type = "text" class = "form-control" 
               name = 'username' placeholder = "username"></input>
               </br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password" required></input>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Logout <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
      
   </body>
</html>
<?=template_footer()?>
