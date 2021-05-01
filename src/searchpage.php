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
<html>
<head>DogeCar</head>
<body>
    <!--<object data="header.php" height="20%" width="50%"></object> -->
    
<br>
<table>
    <tr>
        <th>
            <?php
            //results are passed as an array and displayed on this page.
                
                
                include("search.php");
                
                $query = $_GET['search'];
                $Buscar = new Search();
                $results = $Buscar->query($query, $pdo);
                
                foreach ($results as $value) {
                    echo '<p href="index.php?page=product&id="'.$value["id"].'>Make: '.$value["make"]." Model".$value["model"]."</p><br>";
                }
                    
             
            ?>
        </th>
    </tr>
</table>
</body>
<?=template_footer()?>
