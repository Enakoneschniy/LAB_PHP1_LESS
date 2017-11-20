<?php
ini_set('display_errors',1);


include 'classes/User.php';

$dsn = "mysql:host=localhost;dbname=laravel;charset=utf8";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try{
    $pdo = new PDO($dsn, 'root', '', $opt);
}catch (PDOException $e){
    die('Подключение не удалось: ' . $e->getMessage());
}



/*$stmt = $pdo->query('SELECT name FROM users');
while ($row = $stmt->fetch())
{
    echo $row['name'] . "<br>";
}*/

$stmt = $pdo->query('SELECT name FROM users WHERE id='.$_GET['id']);
$row = $stmt->fetch();
echo $row['name'] . "<br>";

$stmt = $pdo->prepare('SELECT name, email FROM users WHERE email LIKE :email AND id = :id');

$stmt->execute([
    'id' => 2,
    'email' => "%{$_GET['email']}"
]);

//var_dump($stmt);
foreach ($stmt as $row)
{
    echo $row['name'] . "  -  ". $row['email'] . "<br>";
}

$stmt = $pdo->query('SELECT name FROM users WHERE id='.$_GET['id']);
$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
$row = $stmt->fetch();
echo $row->nameToLower();
var_dump($row);

$user = User::create('Vasya3', 'vasya3@yahoo.com', 'rtyrtrsdf');

var_dump($user);