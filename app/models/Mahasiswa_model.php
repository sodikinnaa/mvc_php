<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Sodikin",
    //         "npm" => "20312074",
    //         "e-mail" => "sodikin@teknokrat.ac.id",
    //         "jurusan" => "inforamatika",
    //     ],
    //     [
    //         "nama" => "suratno",
    //         "npm" => "20312074",
    //         "e-mail" => "suratno@teknokrat.ac.id",
    //         "jurusan" => "inforamatika",
    //     ],
    //     [
    //         "nama" => "aghus",
    //         "npm" => "20312074",
    //         "e-mail" => "sodikin@teknokrat.ac.id",
    //         "jurusan" => "inforamatika",
    //     ]   
    // ];

    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=php_mvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die('Error : ' . $e->getMessage());
        }
    }


    public function getAllMahasiwa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
