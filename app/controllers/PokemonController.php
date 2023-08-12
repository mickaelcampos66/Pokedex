<?php

namespace app\controllers;
use app\models\Pokemon;
use app\models\Type;
use app\models\PokemonType;

class PokemonController extends CoreController
{

    public function pokemon($params){

        $id = $params['id'];
        //dump($id);
        $pokemonModel = new Pokemon();
        
        
        $pokemon = $pokemonModel->find($id);
        $typeModel = new Type();
        $types = $typeModel->findTypeByPokemon($id);

        $dataToSend['types'] = $types;
        
        $dataToSend['pokemon'] = $pokemon;
        
        
        $this-> show('pokemon', $dataToSend);
    }

}