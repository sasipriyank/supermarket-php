<?php
if (isset($_POST['submit'])) { 
  $quantity = $_POST["quantity"]; 
  $items = $_POST["items"]; 
  $specialprice = $_POST["specialprice"];
  $specialpriceqty = $_POST["specialpriceqty"];
  $unitprice = $_POST["unitprice"];
 
 echo "Item is = ". $items .'</br>'; 
 echo "Quantity is = ". $quantity .'</br>'; 
 if($items =='C'){
	 if($quantity <=2){
		 $specialpriceqty = 2;
		 $specialprice=38;
		
	 }else if($quantity <=3){
		 $specialpriceqty = 3;
		 $specialprice=50;
	}else if($quantity ==4){
		 $specialpriceqty = 3;
		 $specialprice=50;
	}else if($quantity >=5){
		 $specialpriceqty = 5;
		 $specialprice=88;
	}
	 $remainder = $quantity  % $specialpriceqty;
	 $quotient = intdiv($quantity, $specialpriceqty); 
	echo "Total Price =".$sumamt = ($remainder * $unitprice) + ($quotient * $specialprice) ;
 }else if($items =='E' && $specialpriceqty==0){
	   echo "Total Price =".$sumamt = ($quantity * $unitprice) ;
 }
 else{
	 $remainder = $quantity  % $specialpriceqty;
	 $quotient = intdiv($quantity, $specialpriceqty); 
     echo "Total Price =".$sumamt = ($remainder * $unitprice) + ($quotient * $specialprice) ;
 }
} 
?>

<html>
<form action="" method="post">
<body onload="loadOffer()">
<h1>SuperMarket Checkout</h1>
<hr>
<label for="Items">Choose a Item:</label>

<select name="items" id="items" onchange="loadOffer()" >
  <option value="A" <?=(isset($items))? $items : 'A'; ?>>A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
</select>
<input type="hidden" name="specialprice" value="" id="sp">
<input type="hidden" name="specialpriceqty" value="" id="spq">

<input type="hidden" name="unitprice" value="" id="up">
<br/>
<div id="unitprice"></div>
<div id="specialprice"></div>

<label for="Quantity">Choose a Quantity:</label>
<select name="quantity" id="quantity">
<?php for($i=1;$i<=50;$i++){?>
  <option value=<?=$i?>><?=$i?></option>
  <?php }?>
  
</select>
<label for="Price"></label>
<input name="submit" type="submit">
</body>

</form>
</html>

<script>
function loadOffer() {
    itemname = document.getElementById("items").value;
    
	if(itemname=="A"){
		document.getElementById("unitprice").innerHTML="Item" + itemname + " unit price 50";
		document.getElementById("sp").value="130";
		document.getElementById("spq").value="3";
		document.getElementById("up").value="50";
		document.getElementById("specialprice").innerHTML="Item" + itemname +" special price 3 for 130";
	}
	if(itemname=="B"){
		document.getElementById("unitprice").innerHTML="Item" + itemname +" unit price 30";
		document.getElementById("sp").value="45";
		document.getElementById("spq").value="2";
		document.getElementById("up").value="30";
		document.getElementById("specialprice").innerHTML="Item" + itemname +" special price 2 for 45";
	}
	if(itemname=="C"){
		document.getElementById("unitprice").innerHTML="Item" + itemname +" unit price 20";
		document.getElementById("specialprice").innerHTML="Item" + itemname + " special price 2 for 38 and 3 for 50";
		document.getElementById("sp").value="38";
		document.getElementById("spq").value="2";
		document.getElementById("up").value="20";
	}
	if(itemname=="D"){
		document.getElementById("unitprice").innerHTML="Item" + itemname +" unit price 15";
		document.getElementById("specialprice").innerHTML="Item" + itemname +" special price 5 if purchased with an 'A'";
		document.getElementById("sp").value="5";
		document.getElementById("spq").value="5";
		document.getElementById("up").value="15";
	}
	if(itemname=="E"){
		document.getElementById("unitprice").innerHTML="Item" + itemname +" unit price 5";
		document.getElementById("specialprice").innerHTML="";
		document.getElementById("sp").value="0";
		document.getElementById("spq").value="0";
		document.getElementById("up").value="5";
	}
}
</script>
