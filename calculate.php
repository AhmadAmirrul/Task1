<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voltage = (float)$_POST['voltage'];
    $current = (float)$_POST['current'];
    $rate = (float)$_POST['rate'];

    function calculatePower($voltage, $current) {
        return $voltage * $current;
    }

    function calculateEnergyPerHour($power) {
        return $power / 1000;
    }

    function calculateTotalCostPerHour($energy_per_hour, $rate) {
        return $energy_per_hour * ($rate / 100);
    }

    $power = calculatePower($voltage, $current);
    $energy_per_hour = calculateEnergyPerHour($power);
    $total_per_hour = calculateTotalCostPerHour($energy_per_hour, $rate);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Rate Calculation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <h2>Electricity Rate Calculation</h2>    
            <div>
                <p><strong>Power:</strong> <?php echo number_format($energy_per_hour, 5); ?> kWh</p>
                <p><strong>Rate:</strong> <?php echo "RM" . number_format($total_per_hour, 3); ?></p>
            </div>

        <table>
            <thead>
                <tr>
                    <th>Hour</th>
                    <th>Energy (kWh)</th>
                    <th>Total Cost (RM)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($hour = 1; $hour <= 24; $hour++) {
                    $energy = $energy_per_hour * $hour;
                    $total_cost = $total_per_hour * $hour;
                    echo "<tr>
                            <td>{$hour}</td>
                            <td>" . number_format($energy, 5) . "</td>
                            <td>" . number_format($total_cost, 2) . "</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="index.php">Back</a>
    </div>
</body>
</html>
<?php
}
?>