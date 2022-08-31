<html>
    <head>
        <title>Add product</title>
    </head>
    <body>
        <form method = "post">
            ID : <input type = "text" name = "id"><br><br>
            Name : <input type = "text" name = "name"><br><br>
            Price : <input type = "text" name = "price"><br><br>
            &emsp;<input type = "submit" name = "save" value = "submit">
        </form>
        <?php
            if(isset($_POST['save'])){
                $products = simplexml_load_file('products.xml');
                $product = $products->addChild('product');
                $product->addAttribute('id',$_POST['id']);
                $product->addChild('name',$_POST['name']);
                $product->addChild('price',$_POST['price']);

                file_put_contents('products.xml',$products->asXML());
                header("location:index.php");
            }
        ?>
    </body> 
</html>