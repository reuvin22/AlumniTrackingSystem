<?php
    require './php/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type='text/css' href="./serverSIdeCss/style.php">
</head>
<body>
    <div class="contentContainer">
        <div class="record">
            <div class="cards">
                <div class="image">
                    <img src="./images/alumni.png" alt="Alumni">
                </div>
                <div class="count">
                    <span>Total Alumni<br>
                    <?php
                        $sql = "SELECT * FROM `alumni`";
                        $query = mysqli_query($conn, $sql);
                        $result = mysqli_num_rows($query);
                        if($result >= 0){
                            echo '<h1>'. $result .'</h1></span>';
                        }
                    ?>
                </div>
            </div>
            <div class="cards">
                <div class="image">
                    <img src="./images/employed.png" alt="Employed">
                </div>
                <div class="count">
                    <span>Employed<br>
                    <?php
                        $sql = "SELECT employmentStatus FROM `alumni` WHERE employmentStatus = 'Employed'";
                        $query = mysqli_query($conn, $sql);
                        $result = mysqli_num_rows($query);
                        if($result >= 0){
                            echo "<h1>".$result."</h1></span>";
                        }
                    ?>
                </div>
            </div>
            <div class="cards">
                <div class="image">
                    <img src="./images/unemployed.png" alt="Unemployed">
                </div>
                <div class="count">
                    <span>Unemployed<br>
                    <?php
                        $sql = "SELECT employmentStatus FROM `alumni` WHERE employmentStatus = 'Unemployed'";
                        $query = mysqli_query($conn, $sql);
                        $result = mysqli_num_rows($query);
                        if($result >= 0){
                            echo "<h1>".$result."</h1></span>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="charts">
                <div class="chart1">
                    <canvas id="employmentStatus">
                    </canvas>
                </div>
                <div class="chart2">
                    <canvas id="genderStatus">
                    </canvas>
                </div>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <?php
    $sql = "SELECT SUBSTRING(years, 1, 4) AS year, employmentStatus FROM `alumni` WHERE employmentStatus IN ('Employed', 'Unemployed')";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $yearlyCounts = array_fill_keys(range(2016, 2022), ['Employed' => 0, 'Unemployed' => 0]);

    foreach ($result as $row) {
        $year = intval($row['year']);

        if ($year >= 2016 && $year <= 2022) {
            $employmentStatus = $row['employmentStatus'];
            $yearlyCounts[$year][$employmentStatus]++;
        }
    }

    $employedQuery = "SELECT gender, COUNT(*) AS count FROM `alumni` WHERE employmentStatus = 'Employed' GROUP BY gender";
    $employedResult = mysqli_query($conn, $employedQuery);

    $employedData = array('Male' => 0, 'Female' => 0);

    while ($row = mysqli_fetch_assoc($employedResult)) {
        $gender = $row['gender'];
        $count = $row['count'];

        $employedData[$gender] = $count;
    }
    $employedDataJSON = json_encode(array_values($employedData));
    ?>
    <script>
        const ctx = document.getElementById('employmentStatus');

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels:  <?php echo json_encode(range(2016, 2022)); ?>,
                datasets: [
                    {
                        label: 'Employed',
                        data: <?php echo json_encode(array_column($yearlyCounts, 'Employed')); ?>,
                        backgroundColor: 'rgb(0,105,160)',
                        borderWidth: 1
                    },
                    {
                        label: 'Unemployed',
                        data: <?php echo json_encode(array_column($yearlyCounts, 'Unemployed')); ?>,
                        backgroundColor: 'red',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Yearly Report of Employment Status'
                    }
                }
            }
        });

        const pie = document.getElementById('genderStatus');

        const pieChart = new Chart(pie, {
            type: 'pie',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    data: <?php echo $employedDataJSON; ?>,
                    backgroundColor: ['rgb(82,219,226)', 'red'],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Gender Distribution of Employed Alumni'
                    }
                }
            }
        });
    </script>
</body>
</html>