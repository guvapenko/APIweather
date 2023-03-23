<?php
$city = isset($_GET['city']) ? $_GET['city'] : '';
$celsius = isset($_GET['celsius']) ? $_GET['celsius'] : '';
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ТЕСТ</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="weather">
    <div class="city-box">
        <h2 class="city">City</h2>
        <p class="city-name"><?php echo $city ?></p>
    </div>
    <div class="temperature-box">
        <p class="temperature">Temperature </p>
        <p class="temperature-value"><?php echo $celsius ?> °C</p>
    </div>
    <div class="city-form">
        <form action="weather.php" method="post">
            <label for="city">Введите название города:</label>
            <input type="text" id="city" name="city" required>
            <button type="submit">Получить погоду</button>
        </form>
    </div>
</div>


