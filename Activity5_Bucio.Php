<!DOCTYPE html>
<html>
<head>
    <title> BMI Calculator </title>
    <style type="text/css">
body { 
    background: orange;
    text-align: center;
    justify-content: center;
    align-items: center;
    
}
</style>
</head>
<body>
<div class = "container">
    <h2> BMI Calculator </h2>
    <form method = "POST">
    Height (kg): <input type = "number" name = "Height"  step="0.1" required><br>
    Weight (cm): <input type = "number" name = "Weight" step = "0.1" required><br>
    <input type="submit" name="calculator" class="btn" value="Calculate BMI">
</form>
</div>

<div class = "result-box">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Weight = isset ($_POST['Weight']);
    $Height = isset ($_POST['Height']);

    if (is_numeric($Weight) && is_numeric($Height) && $Height > 0 && $Weight > 0) {
        if ($Height > 10 ) {
            $Height = $Height / 100; 
        }

        $bmi = $Weight / ($Height * $Height);
        $bmiFormatted = number_format($bmi, 2);


if ($bmi < 18.5) { 
    $classification = "Underweight";
    $risk = "Low (but risk of other clinical problems increased)";
}   elseif ($bmi >=18.5 && $bmi <= 24.9) {
    $classification = "Normal Range" ;
    $risk = "Average";
}   elseif ($bmi >=25.0 && $bmi <= 29.9) {
    $classification = "Overweight (preobese)" ;
    $risk = "Mildly Increased";
}   elseif ($bmi >=30.0 && $bmi <= 34.9) {
    $classification = "Class I Obese" ;
    $risk = "Moderate";
}   elseif ($bmi >=35.0 && $bmi <= 39.9) {
    $classification = "Class II Obese" ;
    $risk = "Severe" ;
} else {
    $classification = "Class 3 Obese";
    $risk = "Very severe";
}
echo "<h3>BMI Result</h3>";
echo "<p>Your BMI value is: <strong>$bmiFormatted</strong></p>";
echo "<p><strong>$classification</strong></p>";
echo "<p>Risk Level: $risk</p>";
echo "</div>";

}   else {
    echo "<p style='color:red;'>Please enter valid weight and height values.</p>";
}
}
?>
</div>
</body>
</html>