<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados do Quiz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Resultados do Quiz</h1>
       <?php

        $name = $_POST['name'];
        $q1 = strtolower($_POST['q1']);
        $q2 = strtolower($_POST['q2']);
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
        $q6 = $_POST['q6'];

        $score = 0;

        if ($q1 == "brasília") {
            $score++;
        }

        if ($q2 == "miguel de cervantes") {
            $score++;
        }

        if ($q3 == "jupiter") {
            $score++;
        }

        if ($q4 == "pacifico") {
            $score++;
        }

        if ($q5 == "leonardo da vinci") {
            $score++;
        }

        if ($q6 == "1914") {
            $score++;
        }

        echo "<p>Nome: $name</p>";
        echo "<p>Acertos: $score/6</p>";
        ?>
        <a href="trabalho.html"><button>Voltar</button></a>
    </div>
</body>
</html>
