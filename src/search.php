<?=template_header('Search')?>
<style>
@import "style.css"

.yes {
  background-color: #41bcff;
  background-image: "../res/search.png";
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<?php
//include("index.php");

	// Create connection
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	$query = $_POST['search'];
	$newURL = "index.php?page=searchpage&search=".$query;
		if (empty($query)) {
	       // echo "Search bar is empty";
		} else {
		//	$search->query($query);
			header("Location: ".$newURL);
			exit();
			
	   		}
	}
class Search {

	public $conn;
	public $results;
	public $servername;
     public   $username;
    public    $password;
      public  $dbname;
	
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dogecar";
        

        //$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
       // if ($conn->connect_error) {
      //      die("Connection failed: " . $conn->connect_error);
      //  }
    }


    function query($Search, $pdo) {
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dogecar";
        
        $results;
        /*
        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT id, make, model FROM inventory WHERE make = ".preg_replace('/[^a-zA-Z]/', '', $Search);
        //$sql->bind_param('s', $Search);
        $result = $conn->query($sql, MYSQLI_STORE_RESULT);
        */
        $stmt = $pdo->prepare("SELECT id, name FROM products WHERE name LIKE '%?%' ");
        $stmt->execute(array('?' => $Search));
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        /*
        if ($result->num_rows > 0) {
        // output data of each row
            $results = array($result->num_rows);
            while($row = $result->fetch_assoc()) {
                $count = 0;
                //echo "id: " . $row["id"]. " - Name: " . $row["make"]. " " . $row["model"]. "<br>";
                $results[$count] = $row;
            }
        } else {
            echo "0 results";
        } */
		//$conn->close();
		return $results;
    }
    

}
?>
 <form class = "form" role = "form" method="POST" 
    >
    <input type="text" name="search" />
    <input class="yes" type="submit" value="Search" ></input>
    </form>
    
<?=template_footer()?>
