
<!DOCTYPE html>
<html>
<body>
<table>
<?php
echo "<table  style='border-collapse: collapse'>";
	for ($row=0; $row <= 100; $row++)
  {
		echo "<tr> \n";
    if($row==0)
    {
      echo "<td> </td>";
      for ($col=1; $col <= 100; $col++)
      {
         echo "<td>$col</td> \n";
  		}
    }
    else
    {
      echo "<td>$row</td>";
      for ($col=1; $col <= 100; $col++)
      {
  		   $p = $col * $row;
         echo "<td>$p</td> \n";
  		}
  	  echo "</tr>";
    }
  }
echo "</table>";

?>
</table>
</body>
</html>
