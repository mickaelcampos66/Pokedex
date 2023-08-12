<?php

namespace app\models;

use app\utils\Database;
use PDO;

class Pokemon extends CoreModel
{
    
    private $name;	
    private $hp;
    private $attack;
    private $defense;
    private $spe_attack;
    private $spe_defense;
    private $speed;
    private $number;

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
     * Get the value of hp
     */ 
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set the value of hp
     *
     * @return  self
     */ 
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get the value of attack
     */ 
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * Set the value of attack
     *
     * @return  self
     */ 
    public function setAttack($attack)
    {
        $this->attack = $attack;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of spe_attack
     */ 
    public function getSpeAttack()
    {
        return $this->spe_attack;
    }

    /**
     * Set the value of spe_attack
     *
     * @return  self
     */ 
    public function setSpeAttack($spe_attack)
    {
        $this->spe_attack = $spe_attack;

        return $this;
    }

    /**
     * Get the value of spe_defense
     */ 
    public function getSpeDefense()
    {
        return $this->spe_defense;
    }

    /**
     * Set the value of spe_defense
     *
     * @return  self
     */ 
    public function setSpeDefense($spe_defense)
    {
        $this->spe_defense = $spe_defense;

        return $this;
    }

    /**
     * Get the value of speed
     */ 
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * Set the value of speed
     *
     * @return  self
     */ 
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Fonction qui permet de récupérer un pokemon par son identifiant dans la BDD
     *
     * @param [type] $id
     * @return void
     */
    public function find($id){

        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `pokemon` WHERE `number` =" . $id;
        $stmt = $pdo->query($sql);
        $pokemon = $stmt->fetchObject('app\models\Pokemon');

        return $pokemon;
    }

    /**
     * Fonction qui permet de récupérer tous les pokémons dans la BDD
     *
     * @return void
     */
    public function findAll(){

        $pdo = Database::getPDO();
        $sql = "SELECT * FROM `pokemon`";
        $stmt = $pdo->query($sql);
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS,'app\models\Pokemon');

        return $pokemons;
    }

    /**
     * Fonction qui permet de récuperer un pokemon via son type
     *
     * @param [type] $id
     * @return void
     */
    public function findByType($id){

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `pokemon`
        JOIN `pokemon_type` ON `pokemon`.`number` = `pokemon_type`.`pokemon_number`
        JOIN `type` ON `type`.`id` = `pokemon_type`.`type_id`
        WHERE `type_id` = $id";

        $stmt = $pdo->query($sql);
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS,'app\models\Pokemon');

        return $pokemons;
    }
}