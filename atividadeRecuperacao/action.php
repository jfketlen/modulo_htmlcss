<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Fibonacci</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = intval($_POST['numero']);

        function fibonacci($n) {
            $fib = [0, 1];
            $i = 2;
            while (true) {
                $next = $fib[$i-1] + $fib[$i-2];
                if ($next > $n) break;
                $fib[] = $next;
                $i++;
            }
            return $fib;
        }

        $resultado = fibonacci($numero);
        echo "<h2>Resultado:</h2>";
        echo "<p>" . implode(", ", $resultado) . "</p>";
    }
    ?>
</body>
</html>