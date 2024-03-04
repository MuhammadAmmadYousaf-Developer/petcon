<?php
// Connect to your database (replace with your DB credentials)
$connn=mysqli_connect("localhost","root","","petcon");


if ($connn) {
    $query = "SELECT DATE(timestamp) as timestamp, COUNT(*) as count FROM visitors GROUP BY DATE(timestamp)";
    $result = mysqli_query($connn, $query);
    $data = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    mysqli_close($connn);

    // Output data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Website Visitor Count</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Website Visitor Count</h1>
    <canvas id="visitorChart" width="400" height="200"></canvas>

    <script>
        // Fetch visitor data from a server-side endpoint (PHP)
        fetch('visitor_data.php')
            .then(response => response.json())
            .then(data => {
                const timestamps = data.map(entry => entry.timestamp);
                const visitorCount = data.map(entry => entry.count);

                const ctx = document.getElementById('visitorChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: timestamps,
                        datasets: [{
                            label: 'Visitor Count',
                            data: visitorCount,
                            borderColor: 'blue',
                            fill: false
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false
                    }
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>
