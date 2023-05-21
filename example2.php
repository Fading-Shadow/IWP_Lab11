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
    function deleteElement($arr, $element){
        $index = array_search($element, $arr);

        if($index > -1){
            array_splice($arr,$index,1);
        }
        return $arr;
    }
    function displayArr($arr){
        for($i = 0; $i < count($arr); $i++){
            echo $arr[$i] . " ";
        }
        echo "<br>";
    }
    $arrTest = [5, 7, 1, 4, 8];
    displayArr(deleteElement($arrTest,4));
    displayArr(deleteElement($arrTest,9));
    displayArr(deleteElement($arrTest, 7));
?>
</body>
</html>