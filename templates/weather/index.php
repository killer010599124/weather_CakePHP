
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Laravel</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        <!-- Styles -->
        <style>
            body{
                font-family: 'figtree' , sans-serif;
            }
            .weather-search {
                margin: 20px;
                
            }
    
            .weather-search input[type='text'] {
                padding: 8px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }
    
            .weather-search button {
                font-size: 16px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
    
            .weather-search button:hover {
                background-color: #0056b3;
            }
    
            .table-responsive {
                overflow-x: auto;
            }
    
            .weather-table {
                width: 100%;
                border-collapse: collapse;
            }
    
            .weather-table th,
            .weather-table td {
                padding: 8px;
                text-align: center;
                border: 1px solid #ddd;
            }
    
            .weather-table th {
                background-color: #f2f2f2;
            }
    
            .weather_header{
                margin:50px 0;
                display:flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap:20px;
    
            }
            .flex{
                display :'flex'
            }
            /* Responsive styles */
            @media screen and (max-width: 767px) {
                .table-responsive {
                    overflow-x: scroll;
                }
            }
        </style>
    </head>
    <div class="weather-search">

        <div class="weather_header">
        <h2>Weather Search</h2>
        <form class='flex' action="<?= $this->Url->build(['controller' => 'Weather', 'action' => '']) ?>" method="post">
            <input type="text" name="location" placeholder="Enter location" required>
            <button type="submit">Search</button>
        </form>
    </div>
<div class="table-responsive">
    <table class="weather-table">
        <thead>
            <tr>
                <th>Date</th>
                <th>Temperature</th>
                <th>Max Temp</th>
                <th>Min Temp</th>
                <th>Dew Point</th>
                <th>Humidity</th>
                <th>Precipitation</th>
                <th>Wind Gust</th>
                <th>Wind Speed</th>
                <th>Wind Direction</th>
                <th>Description</th>
                <th>Pressure</th>
                <th>Cloud Cover</th>
                <th>Visibility</th>
                <th>Icon</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($weatherData['days'] as $data): ?>
            <tr>
                <td><?= h($data['datetime']) ?></td>
                <td><?= h($data['temp']) ?></td>
                <td><?= h($data['tempmax']) ?></td> 
                <td><?= h($data['tempmin']) ?></td>
                <td><?= h($data['dew']) ?></td> 
                <td><?= h($data['humidity']) ?></td>
                <td><?= h($data['precip']) ?></td>
                <td><?= h($data['windgust']) ?></td>
                <td><?= h($data['windspeed']) ?></td>
                <td><?= h($data['winddir']) ?></td>
                <td><?= h($data['description']) ?></td>
                <td><?= h($data['pressure']) ?></td>
                <td><?= h($data['cloudcover']) ?></td>
                <td><?= h($data['visibility']) ?></td>
            </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>
</html>
