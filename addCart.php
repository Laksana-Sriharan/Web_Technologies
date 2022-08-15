
<a href ="addCart.php?action=logout"><button style = "float:right" type = "button" name = "logout">Logout</button></a><br><br>
<?php
    
       
    session_start();
	
	class Product {
		private $productID ;
		private $productName ;
		private $price ;
		
		public function __construct($id,$name,$price){
			$this->productID = $id ;
			$this->productName = $name ;
			$this->price = $price ;
			
		}
		
		public function getProductID(){
			return $this->productID;
		}
		
		public function setProductID($id){
			$this->productID = $id;
		}
		
		public function getProductName(){
			return $this->productName;
		}
		
		public function setProductName($name){
			$this->productName = $name;
		}
		
		public function getPrice(){
			return $this->price;
		}
		
		public function setPrice($price){
			$this->price = $price;
		}
		
		
	}
	
	$products = array(1=>new Product(1,"Bag",2000.00),2=>new Product(2,"Watch",1000.00),3=>new Product(3,"Ball",100.00));
?>
<h1>Product List</h1>
<table border = "1px solid black">

	<tr> <th>Product ID</th> <th>Product Name</th> <th>Price </th> <th>Actions </th></tr>
	<?php foreach($products as $product){?>
	<tr>
		<td><?php print_r($product->getProductID());?></td>
		<td><?php  print_r( $product->getProductName());?></td>
		<td><?php  print_r( $product->getPrice());?></td>
		<td><a href = "addCart.php?action=add&productID=<?php echo $product->getProductID();?>">Add</a></td>
	</tr>
	<?php }?>
</table>
