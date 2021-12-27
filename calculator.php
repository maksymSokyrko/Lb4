<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<meta charset="utf-8">
</head>
<body>

<h1>
    Результат:
    <?php
    $a = intval($_GET['a']);
    $b = intval($_GET['b']);
    $op = $_GET['op'];
    $res = "undefined";
    switch($op) {
        case "plus": 
            $res = $a + $b;
            break;
        case "minus":
            $res = $a - $b;
            break;
        case "div":
            $res = $a / $b;
            break;
        case "mul":
            $res = $a * $b;
            break;
    }
    echo $res
    ?>
</h1>

</body>
</html>