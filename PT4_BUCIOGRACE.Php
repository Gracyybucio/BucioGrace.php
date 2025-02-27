<?php
function calculateNetIncome($hourlyRate) {
    $hoursPerDay = 8;
    $workingDays = 26;
    $grossincome = $hourlyRate * $hoursPerDay * $workingDays; 

    if($grossincome <= 15000) {
        $tax = 0;
    } elseif ($grossincome <= 30000) {
        $tax = ($grossincome - 15000) * 0.05;
    } else {
        $tax = (15000 * 0.05) + (($grossincome - 30000) * 0.10);
    }

    $netIncome = $grossincome - $tax;
    return [ $grossincome,$tax,$netIncome];
}

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['hourlyRate'])) {
            $hourlyRate = filter_input (INPUT_POST,'hourlyRate',FILTER_VALIDATE_FLOAT);
    
        if ($hourlyRate === false || $hourlyRate <=0) {
            echo "invalid input. Please enter a valid hourly rate.";
        } else {
            list($grossincome,$tax,$netIncome) = calculateNetIncome ($hourlyRate);
            echo "<p>Hourly Rate: $" . number_format($hourlyRate,2) . "</p>";
            echo "<p>Gross Income: $". number_format($grossincome,2)."</p>";
            echo "<p>Tax: $". number_format($tax,2)."</p>";
            echo "<p>Net Income: $". number_format($netIncome,2)."</p>";
        }
        } else {
            echo "No input received.";
        }
    }
    ?>

    <!DOCTYPE html>
    <html>
        <head>
            <title>State Incole Tax Calculator </title>
</head>
<body>
    <form method = "POST">
    <label for = "hourlyRate">Enter your hourly rate ($):</label>
    <input type = "number" step = "0.01" name = "hourlyrate" id = "hourlyrate"required>
    <button type = "Submit">Calculate Net Income</button>
</form>
</body>
</html>