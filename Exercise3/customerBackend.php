<?php
echo "<div>";
echo "<link rel='stylesheet' href='style.css'>";
$usrname = $_POST["usrname"];
$password = $_POST["psw"];
$watch = $_POST["Rose"];
$flower = $_POST["Lily"];
$car = $_POST["Hydrangea"];
$ship = $_POST["ship"];
if($Rose ==''){
  $Rose = 0;
}
if($Lily ==''){
  $Lily = 0;
}
if($Hydrangea==''){
  $cHydrangea = 0;
}
$RoseCost = $Rose * 3;
$LilyCost = $Lily *4;
$Hydrangea = $Hydrangea * 5;
$totalCost = $watchCost + $flowerCost +$carCost;

$shipCost =0;
echo "Flower store <br>";
echo "Username: ".$usrname."<br>";
echo "Password: ".$password."<br>";
if($ship=="seven"){
  $shipCost = 0;
  $totalCost +=0;
}else if($ship =="one"){
  $shipCost = 50;
  $totalCost +=50;
}else if($ship =="three"){
  $shipCost = 5;
  $totalCost +=5;
}
echo "<h3> Here's Your Receipt!</h3>";
echo "<table id = 'receipt'>";
echo "<tr><th>   </th><th>Quanity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
echo "<tr><td id = 'item'>Watch</td><td>$watch</td><td>$3</td><td>$$watchCost</td></tr>";
echo "<tr><td id = 'item'>Flower</td><td>$flower</td><td>$40</td><td>$$flowerCost</td></tr>";
echo "<tr><td id = 'item'>Car</td><td>$car</td><td>$50</td><td>$$carCost</td></tr>";
echo "<tr><td id = 'item'>Shipping</td><td colspan = '2'>$ship day(s)</td><td>$$shipCost</td></tr>";
echo "<tr><td id = 'item' colspan = '3'>Total Cost</td><td id = 'item'>$$totalCost</td></tr>";
echo "</table>";
echo "</div>";
?>
