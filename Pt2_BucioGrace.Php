<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Activity 2 - SET C: Expansion Project</title>
<style type="text/css">
body, td ,th {
    font-family: Arial, Helvetica, sans-serif;
    color:rgb(44, 34, 34);
    font-size: 12px;
}
.style1 { color:rgb(241, 10, 10) }
.style2 { 
    color:rgb(9, 24, 233);
    font-weight: bold;
}
.style3 { color:rgb(255, 1, 1);
}
.style7 { color:rgb(209, 16, 26);
    font-style: italic;
}
body { 
    background-color : #87CEEB;
}
.style8 {color: #000080;
}
</style></head>

<body> 
<p><&nbsp;></p>
<table width="85%" height="50%" border="3" align="center" cellpadding="0" cellspacing="0" bordercolor="#011d30">
<tbody><tr>
<td>
    <h1 align="center">&nbsp;</h1>
    <h1 align="center" class="style8"> Public Library Expansion Project </h1>
    <h2 align="center" class="style1"> Cost Estimates </h2>
<table width="82%" border="0" align="center" cellpadding="5" cellspacing="0">
<tbody>
<tr>
    <td width="23" align="center" height="31" bgcolor="#b3a6a6" scope="col"> Expenditures </td>
    <td width="23" align="right"  bgcolor="#b3a6a6" scope="col"> Estimated Cost </td>
    <td width="23" align="right"  bgcolor="#b3a6a6" scope="col">  10% Increase </td>
    <td width="23" align="right"  bgcolor="#b3a6a6" scope="col">  15% Increase </td>
    <td width="23" align="right"  bgcolor="#b3a6a6" scope="col">  20% Increase </td>
</tr>
<tr bgcolor="#CDBD88">
    <td align="center" bgcolor="#CDBD88"> Lumber </td>
    <td align="right" bgcolor="#CDBD88"> $ 150,000.00 </td>
    <td align="right"><span class="style7"><?php
        $cost = 150000.00;
        $total_cost = $cost + $cost * 0.10;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 150000.00;
        $total_cost = $cost + $cost * 0.15;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 150000.00;
        $total_cost = $cost + $cost * 0.20;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
</tr>
<tr bgcolor="#2e87ab">
    <td align="center" bgcolor="#2e87ab"> Concrete </td>
    <td align="right" bgcolor="#2e87ab"> $ 78,000.00 </td>
    <td align="right"><span class="style7"><?php
        $cost = 78000.00;
        $total_cost = $cost + $cost * 0.10;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 78000.00;
        $total_cost = $cost + $cost * 0.15;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 78000.00;
        $total_cost = $cost + $cost * 0.20;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
</tr>
<tr bgcolor="#CDBD88">
    <td align="center" bgcolor="#CDBD88"> Drywall </td>
    <td align="right" bgcolor="#CDBD88"> $ 69,000.00 </td>
    <td align="right"><span class="style7"><?php
        $cost = 69000.00;
        $total_cost = $cost + $cost * 0.10;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 69000.00;
        $total_cost = $cost + $cost * 0.15;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 69000.00;
        $total_cost = $cost + $cost * 0.20;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
</tr>
<tr bgcolor="#2e87ab">
    <td align="center" bgcolor="#2e87ab"> Paint </td>
    <td align="right" bgcolor="#2e87ab"> $ 12,000.00 </td>
    <td align="right"><span class="style7"><?php
        $cost = 12000.00;
        $total_cost = $cost + $cost * 0.10;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 12000.00;
        $total_cost = $cost + $cost * 0.15;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 12000.00;
        $total_cost = $cost + $cost * 0.20;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
</tr>
<tr bgcolor="#CDBD88">
    <td align="center" bgcolor="#CDBD88"> Miscellaneous </td>
    <td align="right" bgcolor="#CDBD88"> $ 20,000.00 </td>
    <td align="right"><span class="style7"><?php
        $cost = 20000.00;
        $total_cost = $cost + $cost * 0.10;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 20000.00;
        $total_cost = $cost + $cost * 0.15;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
    <td align="right"><span class="style7"><?php
        $cost = 20000.00;
        $total_cost = $cost + $cost * 0.20;
        echo "$" . number_format ($total_cost, 2);
?></span></td>
</tr>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp;</td>
    <td align="right">&nbsp</td>
</tr>
<td align="right"><strong> Total Expenditures: </strong></td>
<td align="right"><span class="style2"><?php
$a = 150000.00;
$b = 78000.00;
$c = 69000.00;
$d = 12000.00;
$e = 20000.00;
$total_cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($total_cost, 2)
?></span></td>
<td align="right"><span class="style3"><?php
$a = 165000.00;
$b = 85800.00;
$c = 75900.00;
$d = 13200.00;
$e = 22000.00;
$total_cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($total_cost, 2)
?></span></td>
<td align="right"><span class="style3"><?php
$a = 172500.00;
$b = 89700.00;
$c = 79350.00;
$d = 13800.00;
$e = 23000.00;
$total_cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($total_cost, 2)
?></span></td>
<td align="right"><span class="style3"><?php
$a = 180000.00;
$b = 93600.00;
$c = 82800.00;
$d = 14400.00;
$e = 24000.00;
$total_cost = $a + $b + $c + $d + $e;
echo "$" . number_format ($total_cost, 2)
?></span></td>
</tr>

<tr>
    <td colspan="5" align="right"><h4> Created By: <em> Grace Ann P. Bucio </em> </h4> </td>
</tr>
<tbody></table>
</body>
</html>
    