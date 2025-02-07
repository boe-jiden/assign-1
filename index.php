<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <h1>Multipurpose Calculator</h1>
    <form method="post">
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="exponent">Exponentiation</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select>
        <input type="number" name="num2">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = null;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num2 != 0 ? $num1 / $num2 : "Undefined (division by zero)";
                break;
            case 'exponent':
                $result = pow($num1, $num2);
                break;
            case 'percentage':
                $result = ($num1 / 100) * $num2;
                break;
            case 'sqrt':
                $result = sqrt($num1);
                break;
            case 'log':
                $result = log($num1);
                break;
        }

        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>