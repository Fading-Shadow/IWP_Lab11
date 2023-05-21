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

    function longestName($arr)
    {
        $length = "";
        for ($i = 0; $i < count($arr); $i++) {
            if (strlen($arr[$i]) > strlen($length)) {
                $length = $arr[$i];
            }
        }
        return $length;
    }

    $arr = ["Albert", "Christophe", "John", "Bernard"];
    echo longestName($arr);

    ?>
</body>

</html>