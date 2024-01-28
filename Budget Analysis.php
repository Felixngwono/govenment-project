<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Project Budget Analysis</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Government Project Budget Analysis</h1>

        <!-- Budget Breakdown Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Component</th>
                    <th>Allocated Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Planning</td>
                    <td>ksh. 1,000,000</td>
                </tr>
                <tr>
                    <td>Construction</td>
                    <td>ksh. 5,000,000</td>
                </tr>
               
            </tbody>
        </table>

        
        <canvas id="budgetChart" width="400" height="200"></canvas>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    
    <script>
        var ctx = document.getElementById('budgetChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Planning', 'Construction'],
                datasets: [{
                    label: 'Allocated Amount',
                    data: [1000000, 5000000],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
