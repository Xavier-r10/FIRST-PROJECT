<?php
class ConnectToDb
{
    protected function connect_database()
    {
        try
        {
            $database = new PDO('mysql:host=localhost;dbname=myfirstproject; charset=utf8', 'root', 'ratodisoa',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $database;
        }
        catch (PDOException $e)
        {
            die('ERROR : '. $e->getMessage());
        }
    }
}
class GetInformation extends ConnectToDb
{
    private $defaultValue;
    private $email;

    public function __construct(int $nombre)
    {
        $this -> defaultValue = $nombre;
    }

    public function getAllEmail()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> query("SELECT email FROM user");
            return $requete;
        }
        catch(PDOException $e)
        {
            die('ERROR : '.$e -> getMessage());
        }
    }

    public function setEmail($email)
    {
        $this -> email = $email;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function getKey()
    {
        try
        {
            $database = $this -> connect_database();
            $requete = $database -> prepare("SELECT password FROM user WHERE email = :email");
            $requete -> execute(array(
                'email' => $this -> getEmail()
            ));
            return $requete;
        }
        catch (PDOException $e)
        {
            die('Erreur : '.$e -> getMessage());
        }
    }
}
