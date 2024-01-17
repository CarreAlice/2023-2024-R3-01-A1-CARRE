<?php

namespace Model;

use PDO;
use PDOException;
use PDOStatement;


class Model
{

    static private ?PDO $db = null;

    private function getDB(): PDO
    {
        if(self::$db===null)
        {
            self::$db = new PDO("mysql:host=localhost;dbname=POKEMON;charset=UTF8","root","");
        }
        return self::$db;
    }

    protected function execRequest(string $sql, ?array $params = null): PDOStatement|false
    {
        $res=false;

        if($params === null)
        {
            $res = $this->getDB()->query($sql);
        }
        else
        {
            $res = $this->getDB()->prepare($sql);
            $res->execute($params);
        }

        return $res;
    }


}