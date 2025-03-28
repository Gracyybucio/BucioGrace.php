<html>
<head>
    <title> BMI Calculator </title>
<style type="text/css">

    body { 
        background-image: linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin: 0;
        flex-direction: column;
    }
    h1 {
        color: #333;
        margin-bottom: 20px;
    }
    input[type=submit] { 
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        font-size: 1.1em;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        border: double;
    }
    input[type="number"] {
    padding: 10px;
    font-size: 1em;
    margin-bottom: 15px;
    width: 200px;
    border: 1px solid #ccc;
    border-radius: 5px;
    }
    .container {
    width: 450px;
    padding: 30px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-top: 50px;
    border-radius: 10px;
    border: solid;
    }
    .center h2 {
    font-size: 2em;
    color: #4CAF50;
    margin-bottom: 20px;
    }
    .result-box {
        width: 80%;
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        border: double;
        border-color: black;
    }


</style>
</head>
<body>
<div class = "container">
<center>
    <h2> BMI Calculator </h2>
    <form method = "POST">
    Height (kg): <input type = "number" name = "Height"  step="0.1" required><br>
    Weight (cm): <input type = "number" name = "Weight" step = "0.1" required><br>
    <input type="submit" name="calculator" class="btn" value="Calculate BMI">
</form>
</center>
</div>

<div class = "result-box">
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Weight = $_POST['Weight'];
    $Height = $_POST['Height'];

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
</center>
</div>
</div>
</body>
</html>
