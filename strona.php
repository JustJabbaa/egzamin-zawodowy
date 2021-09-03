<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styl_1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
</head>
<body>
    <header>
        <h1>Portal dla Wędkarzy</h1>
    </header>
    <div class="prawo">
        <img src="ryba1.jpg" alt="Sum">
        <br>
        <a href="kwerendy.txt">Pobierz Kwerendy</a>
    </div>
    <div class="lewo">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $db = new mysqli('localhost','root', '','wedkowanie');
                $sql = "SELECT nazwa, wystepowanie FROM `ryby`WHERE styl_zycia = 1";
                $wynik = $db->query($sql);
                while($wiersz = $wynik->fetch_assoc()) {
                    $nazwa = $wiersz['nazwa'];
                    $wystepowanie = $wiersz['wystepowanie'];
                    echo "<li>$nazwa, wystepowanie: $wystepowanie</li>";
                };
                $db->close()
            ?>
        </ul>
    </div>
    
    <footer>
        <p>Stronę wykonał: 02272105533</p>
    </footer>
    
</body>
</html>