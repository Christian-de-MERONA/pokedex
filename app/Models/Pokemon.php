<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\utils\Database;
use Pokedex\Models\Type;

class Pokemon {
    // database columns
    private $id;
    private $nom;
    private $pv;
    private $attaque;	
    private $defense;	
    private $attaque_spe;	
    private $defense_spe;	
    private $vitesse;	
    private $numero;	

    public function findAll ()
    {
        // connect to Database
        $pdo = Database::getPDO();

        // declare sql request
        $sql = "
        SELECT *
        FROM `pokemon`
        ;";

        // create statement
        $pdoStatement = $pdo->query($sql);

        // fetch list from database
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        // return list from database
        return $results;

    }

    public function find($id)
    {
        // connect to Database
        $pdo = Database::getPDO();

        // declare sql request
        $sql = "
        SELECT *
        FROM `pokemon`
        WHERE `numero` = {$id}
        ;";

        // create statement
        $pdoStatement = $pdo->query($sql);

        // fetch list from database
        $result = $pdoStatement->fetchObject(self::class);
        
        // return list from database
        return $result;

    }

    public function findPokemonOfType($id)
    {
        // connect to Database
        $pdo = Database::getPDO();

        // declare sql request
        $sql = "
            SELECT *
            FROM `pokemon`
            INNER JOIN `pokemon_type` ON `pokemon`.`numero` = `pokemon_type`.`pokemon_numero`
            INNER JOIN `type` ON `pokemon_type`.`type_id` = `type`.`id`
            WHERE `type`.`id` = {$id}
        ;";

        // create statement
        $pdoStatement = $pdo->query($sql);

        // fetch list from database
        $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        
        // return list from database
        return $result;

    }



    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of defense_spe
     */ 
    public function getDefenseSpe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of attaque_spe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
}