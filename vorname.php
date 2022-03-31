<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $vorname = $_POST['vorname'];

            echo "<p>Salutt $vorname<p>";

            for ($i=date('Y'); $i >= 1900 ; $i--) { 
               echo "<a href='berechnung.php?vorname=$vorname&jahrgang=$i'>$i</a></br>";
            }
        }

    ?>
</body>
</html>