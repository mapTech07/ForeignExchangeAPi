<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forex Rates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .table-container {
            margin: 20px;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>Forex Rates</h2>
        <table>
            <thead>
                <tr>
                    <th>Currency</th>
                    <th>Unit</th>
                    <th>Buying Rate</th>
                    <th>Selling Rate</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($rates)): ?>
                    <?php foreach ($rates as $rate): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($rate['currency_name']); ?></td>
                            <td><?php echo htmlspecialchars($rate['unit']); ?></td>
                            <td><?php echo htmlspecialchars($rate['buy']); ?></td>
                            <td><?php echo htmlspecialchars($rate['sell']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">No data available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
