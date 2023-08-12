<?php

namespace app\models;

use app\utils\Database;
use PDO;


class Type extends CoreModel
{
    
    private $name;
    private $color;

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function findAll()
    {
        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `type`";

        $stmt = $pdo->query($sql);

        $types = $stmt->fetchAll(PDO::FETCH_CLASS, 'app\models\Type');

        return $types;

    }

    public function findTypeByPokemon($id)
    {

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `pokemon`
        JOIN `pokemon_type` ON `pokemon`.`number` = `pokemon_type`.`pokemon_number`
        JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
        WHERE `pokemon_number` = $id";


        $stmt = $pdo->query($sql);

        $pokemonType = $stmt->fetchAll(PDO::FETCH_CLASS, 'app\models\Type');
        
        return $pokemonType;
    }
}