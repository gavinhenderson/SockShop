<?php
	include 'php/db.php';
	
	//Below are the tables and the columns taken from them
	//	product - Size, Colour
	//	producttype - Name, id
	//	productquantity - Quantity
	//	manufacturer - Company name
	//	location - location name
	
	try{
		$query = "SELECT producttype.id, producttype.ProductName, manufacturer.Company, product.Size, product.Colour, productquantity.Quantity, location.LocationName FROM ((((product 
			INNER JOIN producttype ON product.ProductType_id = producttype.id)
			INNER JOIN productquantity ON product.id = productquantity.ProductID)
            INNER JOIN location ON productquantity.locationID = location.id)
            INNER JOIN manufacturer ON producttype.Manufacturer_id = manufacturer.id)";
	
		$stmt = $mysql->prepare($query);
		$stmt->execute(); 
		$result = $stmt->fetchAll(); 

		foreach($result as $row) {
			echo $row['id'];
			echo $row['ProductName'];
			echo $row ['Company'];
			echo $row ['Company']; 
			echo $row ['Size']; 
			echo $row ['Colour'];
			echo $row ['Quantity'];
			echo $row ['LocationName'];
			
		}
		
	}
	catch (PODException $e)
	{
		echo $e->getMessage(); 
	}

?>