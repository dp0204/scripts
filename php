<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Bilhetes para Concertos</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #2c3e50;
            color: #ecf0f1;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ecf0f1;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .concert {
            border-bottom: 1px solid #bdc3c7;
            padding: 20px 0;
            margin-bottom: 20px;
        }
        .concert:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }
        h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.1em;
            margin: 5px 0;
        }
        .price {
            font-weight: bold;
            color: #e74c3c;
            font-size: 1.2em;
        }
        .buy-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            font-size: 1.1em;
        }
        .buy-button:hover {
            background-color: #2980b9;
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #2c3e50;
            color: #ecf0f1;
            font-size: 0.9em;
            margin-top: 20px;
        }
        footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Venda de Bilhetes para Concertos</h1>
    </header>
    <div class="container">
        <?php
        $concerts = [
            ["title" => "Concerto de Banda X", "date" => "10 de Junho, 2024", "location" => "Estádio Y", "price" => "€50"],
            ["title" => "Concerto de Artista Y", "date" => "15 de Julho, 2024", "location" => "Arena Z", "price" => "€75"],
            ["title" => "Festival de Música Z", "date" => "20 de Agosto, 2024", "location" => "Parque W", "price" => "€100"],
            ["title" => "Concerto de Banda A", "date" => "5 de Setembro, 2024", "location" => "Teatro B", "price" => "€60"],
            ["title" => "Concerto de Artista B", "date" => "12 de Outubro, 2024", "location" => "Casa de Shows C", "price" => "€80"],
            ["title" => "Festival de Rock", "date" => "25 de Novembro, 2024", "location" => "Praça D", "price" => "€90"]
        ];

        foreach ($concerts as $concert) {
            echo "<div class='concert'>";
            echo "<h2>{$concert['title']}</h2>";
            echo "<p>Data: {$concert['date']}</p>";
            echo "<p>Local: {$concert['location']}</p>";
            echo "<p class='price'>Preço: {$concert['price']}</p>";
            echo "<a href='#' class='buy-button'>Comprar Bilhete</a>";
            echo "</div>";
        }
        ?>
    </div>
    <footer>
        <p>Contactos: info@concertos.com</p>
        <p>Telefone: +351 123 456 789</p>
    </footer>
</body>
</html>

