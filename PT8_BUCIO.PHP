<?php
// Define menu items and their prices
$menu_items = [
    "Sandwich" => 40,
    "Mexican Tacos" => 45,
    "Hotdog Sandwich" => 45,
    "Chicken Nuggets" => 55,
    "Burger" => 50,
];

// Initialize message variable
$order_summary = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST['item'] ?? '';
    $quantity = (int)$_POST['quantity'];
    $order_type = $_POST['order_type'] ?? '';

    if (isset($menu_items[$item])) {
        $price = $menu_items[$item];
        $subtotal = $price * $quantity;
        $tax = ($order_type === "takeout") ? $subtotal * 0.12 : 0;
        $total = $subtotal + $tax;

        $order_summary = "You ordered {$quantity} x {$item}.<br>";
        $order_summary .= "Order Type: " . ucfirst($order_type) . "<br>";
        $order_summary .= "Subtotal: ₱" . number_format($subtotal, 2) . "<br>";
        if ($tax > 0) {
            $order_summary .= "Tax (12%): ₱" . number_format($tax, 2) . "<br>";
        }
        $order_summary .= "<strong>Total: ₱" . number_format($total, 2) . "</strong>";
    } else {
        $order_summary = "Invalid item selected.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Item Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f6fc;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #2c3e50;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        form {
            background-color: white;
            padding: 20px;
            width: 50%;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            align-items: center;
            
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #34495e;
        }

        select, input[type="number"] {
            padding: 8px;
            width: 100%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .summary {
            background: #ecf0f1;
            padding: 15px;
            border-left: 5px solid #3498db;
            width: 50%;
            margin-top: 20px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <center> <h2>Choose Your Order</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Item</th>
                <th>Price (₱)</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu_items as $sandwich => $price) { ?>
                <tr>
                    <td><?php echo $sandwich; ?></td>
                    <td><?php echo "₱" . number_format($price, 2); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <form method="post">
        <label for="item">Select Your Order:</label><br>
        <select name="item" required>
            <option value="" disabled selected>-- Select an item --</option>
            <?php
            foreach ($menu_items as $item => $price) {
                echo "<option value=\"$item\">$item - ₱" . number_format($price, 2) . "</option>";
            }
            ?>
        </select>

        <br><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" required><br><br>

        <label>Order Type:</label><br>
        <input type="radio" name="order_type" value="dinein" required> Dine In<br>
        <input type="radio" name="order_type" value="takeout" required> Take Out (12% Tax Applies)<br><br>

        <input type="submit" value="Calculate Total">
    </form>
        </center>

    <br>

    <?php
    if ($order_summary) {
        echo "<div style='background:#f9f9f9; padding:10px; border:1px solid #ccc;'>$order_summary</div>";
    }
    ?>
</body>
</html>
