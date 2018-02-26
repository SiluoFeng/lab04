<?php
echo "<div>";
echo "<link rel='stylesheet' href='style.css'>";
$usrname = $_POST["usrname"];
$password = $_POST["psw"];
$Rose = $_POST["Rose"];
$Lily = $_POST["Lily"];
$Hydrangea = $_POST["Hydrangea"];
$ship = $_POST["ship"];
if($Rose ==''){
  $Rose = 0;
}
if($Lily ==''){
  $Lily = 0;
}
if($Hydrangea==''){
  $Hydrangea = 0;
}
$RoseCost = $Rose * 3;
$LilyCost = $Lily * 4;
$HydrangeaCost = $Hydrangea * 5;
$totalCost = $RoseCost + $LilyCost + $HydrangeaCost;

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
echo "<tr><td id = 'item'>Rose</td><td>$Rose</td><td>$3</td><td>$$RoseCost</td></tr>";
echo "<tr><td id = 'item'>Lily</td><td>$Lily</td><td>$4</td><td>$$LilyCost</td></tr>";
echo "<tr><td id = 'item'>Hydrangea</td><td>$Hydrangea</td><td>$5</td><td>$$HydrangeaCost</td></tr>";
echo "<tr><td id = 'item'>Ship</td><td colspan = '2'>for $ship day(s)</td><td>$$shipCost</td></tr>";
echo "<tr><td id = 'item' colspan = '3'>Total Cost</td><td id = 'item'>$$totalCost</td></tr>";
echo "</table>";
echo "</div>";
?>
