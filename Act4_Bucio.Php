<!DOCTYPE html>
<html lang="en">
<head>
<title> Sum of Reciprocals </title>
<style type="text/css">
body {
    background-color: #FF2DF1;
}

h1 { 
    font-weight: bold;
    font-size: 1.5em;
}

button { 
    width: 200px;
    background-color:#EDE8DC;
    cursor: pointer;
    border-radius: 5px;
    border: none; 
    padding: 10px;
}

input {
    margin: 25px;
    border: none;
    border-radius: 5px;
    width: 200px;
    padding: 10px;
}

.container {
top: 50%;
left: 50%;
width: 400px;
padding: 40px;
background: #D76C82;
box-shadow: 0 20px 25px rgba(0,0,0,0.1);
border-radius: 0px;
position: absolute;
transform: translate (-60%, 60%);
}

</style></head>
<body>
<br>
<br>
<br>
<br>
<div class="container">
   <center> <h1>Sum of Reciprocals</h1>
    <form method="POST">
        <label for="n"> Enter the value of N: </label>
        <input type="number" name="n" min="1" required>
        <button type="submit"> Calculate</button>
</form>

</php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST['n']);
    $sum = 0.0;
     for ($ = 1; $n; $i++)
{
    $sum +=1 / $i;
}
   echo "sum is: ". number_format($sum,11)."\n";
?>
</center>
</div>
</body>
</html>