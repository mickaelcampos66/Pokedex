<?php

namespace app\models;

use app\utils\Database;
use PDO;

class PokemonType extends CoreModel
{

    private $pokemon_number;
    private $type_id;

    /**
     * Get the value of pokemon_number
     */
    public function getPokemonNumber()
    {
        return $this->pokemon_number;
    }

    /**
     * Set the value of pokemon_number
     *
     * @return  self
     */
    public function setPokemonNumber($pokemon_number)
    {
        $this->pokemon_number = $pokemon_number;

        return $this;
    }

    /**
     * Get the value of type_id
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Récupère un type par son identifiant
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {

        $pdo = Database::getPDO();

        $sql = "SELECT * FROM `type` WHERE `id` =" . $id;
        $stmt = $pdo->query($sql);
        $pokemon = $stmt->fetchObject('app\models\PokemonType');

        return $pokemon;
    }

    
}
