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
<?php 
    include("header.php");
?>
<br>
<table>
    <tr>
        <th>
            <?php
            //results are passed as an array and displayed on this page.
            
            class resultpage() {
                function display($results){
                
                    foreach ($results as $value) {
                        echo "$value <br>";
                    }
                    
                }
            }
            ?>
        </th>
    </tr>
</table>
</body>
