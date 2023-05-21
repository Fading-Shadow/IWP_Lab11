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
        function reverse_case_letters($text){
            $str = "";

            for($i = 0; $i < strlen($text); $i++){
                $letter = substr($text, $i, 1);

                if($letter === strtoupper($letter)) {
                    $str .= strtolower($letter);
                }
                if($letter === strtolower($letter)) {
                    $str .= strtoupper($letter);
                }
            }
            return $str;
        }
        echo reverse_case_letters("AvBsfGge") . "<br>";
        echo reverse_case_letters("JavaScript") . "<br>";
    ?>
</body>
</html>