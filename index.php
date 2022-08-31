<a href = "add.php"> Add Product</a><br><br>

<?php

$products = simplexml_load_file("products.xml");
echo "No.of.Products : ".count($products)."<br>";
?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>  
    <?php foreach($products as $product){ ?> 
    <tr>
        <th><?php echo $product['id']?></th>
        <th><?php echo $product->name ?></th>
        <th><?php echo $product->price ?></th>
        <th><a href ="edit.php?id=<?php echo $product['id']?>">Edit</a>&nbsp;<a href ="index.php?action=del&amp;id=<?php echo $product['id']?>">Delete</a></th>
    </tr> 
    <?php } ?>     
</table>
<?php
    if(isset($_GET['action']) and $_GET['action']="del"){
        $id = $_GET['id'];
        $index = 0;
        $i=0;
        foreach($products->product as $product){
            if($product['id'] == $id){
                $index = $i;
                break;
            }
            $i++;
        }
    }
    unset($products->product[$index]);
    file_put_contents("products.xml",$products->asXML());
    header("location:index.php");
?>