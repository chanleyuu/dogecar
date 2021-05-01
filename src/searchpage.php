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
<body>
    <!--<object data="header.php" height="20%" width="50%"></object> -->
    
<br>

            <?php
            //results are passed as an array and displayed on this page.
                
                
                include("search.php");
                
                $num_products_on_each_page = 8;
                
                $query = $_GET['search'];
                $Buscar = new Search();
                $results = $Buscar->query($query, $pdo);
                
                /*foreach ($results as $value) {
                    echo '<p href="index.php?page=product&id="'.$value["id"].'>Make: '.$value["name"]." ".$value["desc"]."</p><br>";
                } */
                    
             
            ?>
        <div class="products-wrapper">
        <?php foreach ($results as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../res/<?=$product['img']?>" width="250" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</body>
