<?php
$cart_id=$_POST['q'];
include "../../sqlfiles/db_connection.php";
$query="select * from main";
$result=mysqli_query($link,$query) or die(mysqli_error($link));
if($result && mysqli_num_rows($result)!=0)
{
	echo "<table class='table table-striped' id='table_invoice'>";
				echo "<thead>
					<tr>
						<th>Photo ID</th>
						<th>Name</th>
						<th>Price</th>
						<th>Description</th>

					</tr>
				</thead><tbody>";
	while($row=mysqli_fetch_array($result))
	{
		$photoID = $row['photoID'];
		$prodDetail = "Select  * from main where photoID = $photoID";
		$prodResult = mysqli_query($link,$prodDetail) or die(mysqli_error($link));
		if(!$prodResult){
			echo "There was an error in fetching the product with product ID ".$photoID;
		}
		else{
			if(mysqli_num_rows($prodResult)==0)
			{
				echo "There is no item in this cart";
			}
			else{
				while($prod=mysqli_fetch_array($prodResult)){
				$prod_name=$prod['name'];
				$prod_price=$prod['price'];
				echo "<tr><td><input type='text' class='form-control' name='photoID[]' value='".$photoID."'></input></td>";
				echo "<td><input type='text' class='form-control' name=name[] value='".$name."'></input></td>";
				echo "<td><input type='text' class='form-control' name=price[] value='".$prod_price."'></input></td></tr>";
				}
			}
		}
	}
	echo "</table";
}
else{
	echo "There is no item in this cart.";
}
?>