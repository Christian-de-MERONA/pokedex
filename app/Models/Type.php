<?php

namespace Pokedex\Models;

use Pokedex\utils\Database;
use PDO;


class Type
{
    private $id;
    private $name;
    private $color;

    function findAll ()
    {
        // connect to Database
        $pdo = Database::getPDO();

        // declare sql request
        $sql = "
        SELECT *
        FROM `type`
        ;";

        // create statement
        $pdoStatement = $pdo->query($sql);

        // fetch list from database
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        // return list from database
        return $results;
    }

    function findPokemonTypes ($id)
    {
        // connect to Database
        $pdo = Database::getPDO();

        // declare sql request
        $sql = "
            SELECT *
            FROM `pokemon_type`
            INNER JOIN `type` ON `pokemon_type`.`type_id` = `type`.`id`
            WHERE `pokemon_type`.`pokemon_numero` = {$id}
        ;";

        // create statement
        $pdoStatement = $pdo->query($sql);

        // fetch list from database
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        // return list from database
        return $results;
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }
}