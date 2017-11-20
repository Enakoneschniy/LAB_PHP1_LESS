<?php


class User
{
    public $name;
    public function nameToLower(){
        return strtolower($this->name);
    }

    public static function create($name, $email, $password){
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

        $stmt = $pdo->prepare('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
        $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute([
            'email' => $email
        ]);
        return $stmt->fetch();
    }
}