<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sum($n)
    {
        if ($n == 1)
            return 1;
        $sum = 0;
        for ($i = $n; $i >= 1; $i--) {
            $sum = $sum + $i;
        }
        return $sum + sum($n - 1);
    }
    echo sum(1) . "<br>";
    echo sum(2) . "<br>";
    echo sum(3) . "<br>";

    ?>
</body>

</html>