
<?php
ini_set('display_errors', 1);
$string = 'Lorem ipsum 234.4 dolor Sit amet, 246 consectetur 3 adipisicing elit. Distinctio ipsa labore magnam nisi reiciendis saepe sapiente tempore? Consequatur, placeat, vero!';

$pattern = '/[0-9]+\.?[0-9]?/';

$result = [];

print_r(preg_match_all($pattern, $string, $result));
echo '';

print_r($result);

echo preg_replace('/[0-9]+\.?[0-9]??/ ', '', $string);

$strAm = file_get_contents('https://www.amazon.com/dp/B001L238K0/');
echo '<br>';
$res = [];
preg_match_all('/<span id="([0-9a-zA-Z]+)" class="([0-9a-z\-]+)">/', $strAm, $res);

print_r($res);
echo '<br>';
$dirs = scandir('../');
print_r($dirs);



function write_file($file_name, $string){
    $file = fopen($file_name,'a');
    fputs($file, $string."\r\n");
    fclose($file);
}
function read_file($file_name){
    $file = fopen($file_name,'r');
    $resStr = "";
    while (!feof($file)){
        $resStr .= fgets($file);
        $resStr = nl2br(preg_replace('/ /', '&nbsp;', $resStr));
    }

    fclose($file);
    return $resStr;
}

write_file('qwerty.txt','      Hello qwerty!');
write_file('qwerty.txt','asdasdasdasd!');
echo '<br>';
echo '<br>';
echo '<br>';
echo read_file('qwerty.txt');
$tmpfname = tempnam("./", "img");

//print_r(unlink('qwerty.txt'));