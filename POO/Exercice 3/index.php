<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form>
    <label>username :</label><input type="text" name="username"><br>
    <label>email :</label><input type="text" name="email"><br>
    <label>password :</label><input type="text" name="passsword"><br>
    <button action="submit" name="envoyer">envoyer</button>
</form>

<?php

    class DataBase
    {
        static $db;

        public static function connect()
        {
            try {
                self::$db = new PDO('mysql:host=localhost;dbname=poo', "root", "user");
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (Exception $exception) {
                die($exception);
            }
        }

        public static function getPDO()
        {
            return self::$db;
        }
    }


    Class User{
        public $id;
        public $username;
        public $email;
        public $password;
        public $connected;
        public $pdo;
        public function __construct(){
            $this->pdo=DataBase::getPDO();
        }

        public function add_user(){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if (isset($_POST)){
                $this->pdo->execute("INSERT INTO 'user'('username', 'email', 'password') VALUES ('$username', '$email', '$password')");
            }
        }
    }
DataBase::connect();
if ($_SERVER['REQUEST_METHOD']=="post") {
    $user= new User();
    $user->add_user();
}
?>



</body>
</html>