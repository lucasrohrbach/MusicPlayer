<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){


            if(is_numeric($_POST['jahrgang'])){
                $jahr = date('Y');
                $jahrgang = $_POST['jahrgang'];
                $alter = $jahr - $jahrgang;
                echo "Hallo, du bist $alter Jahre alt.";
            } else{
                echo 'ERROR';
            }
        }

    ?>
    
    <form action="vorname.php" method="POST">
        <input type="text" name="vorname" placeholder="Dein Vorname">
        <input type="submit">
    </form>


</body>
</html>