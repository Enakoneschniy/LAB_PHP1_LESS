<?php
//#1
function randArray($length, $min = -10, $max = 10){
    $arResult = [];
    for($i = 0; $i < $length; $i++){
        $arResult[] = rand($min, $max);
    }
    return $arResult;
}

function getPercent($array, $number){
    $numberCount = 0;
    foreach ($array as $num){
        if($num === $number){
            $numberCount++;
        }
    }
    return round($numberCount / count($array) * 100, 1);
}
//#3
function fact($n){
    $f = 1;
    for ($i = 1; $i <= $n; $i++){
        $f *= $i;
    }
    return $f;
}
echo fact(5), "<br>";

//#4
function task4($array, $percent){
    if($percent < 0){
        return "Error!";
    }
    $arResult = [];
    foreach ($array as $num){
        if($num === 1){
            $arResult[] = $num;
        }else{
            $arResult[] = $num + floor($num) * ($percent / 100);
        }
    }
    return $arResult;
}

//#5
function reverse($str){
    $resStr = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--){
        $resStr .= $str[$i];
    }
    return $resStr;
}
echo reverse("hello world");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 07</title>
</head>
<body>
    <pre>
    <?php
        $array = randArray(10);
        print_r($array);
    ?>
    </pre>
    <form method="post">
        <input type="text"
               name="number"
               placeholder="Number"
               value="<?=isset($_POST['number']) ? $_POST['number'] : ''?>"
        >
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if($_POST['submit']){
            if($_POST['number']){
                $res = getPercent($array, (int)$_POST['number']);
                echo "$res%";
            }else{
                echo "Error!!!";
            }
        }
    ?>
</body>
</html>
