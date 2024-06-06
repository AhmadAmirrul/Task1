<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Rate Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <h2>Electricity Rate Calculator</h2>
        <form action="calculate.php" method="POST">
            <div>
                <label for="voltage">Voltage (V):</label>
                <input type="number" step="0.01" id="voltage" name="voltage" required>
            </div>
            <div>
                <label for="current">Current (A):</label>
                <input type="number" step="0.01" id="current" name="current" required>
            </div>
            <div>
                <label for="rate">Current Rate (sen per kWh):</label>
                <input type="number" step="0.01" id="rate" name="rate" required>
            </div>
            <button>Calculate</button>
        </form>
    </div>
</body>
</html>