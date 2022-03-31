<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $jahr = date('Y');
        $jahrgang = $_GET['jahrgang'];
        $alter = $jahr - $jahrgang;

        $vorname = $_GET['vorname'];

        echo "hallo $vorname du bist $alter jahre alt.";
    ?>
</body>
</html>