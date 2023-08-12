<?php

namespace app\controllers;

use app\models\Pokemon;
use app\models\Type;
use app\models\PokemonType;

class MainController extends CoreController
{

    /**
     * Permet l'affichage de la vue principale avec tous les pokémons
     *
     * @param [type] $params
     * @return void
     */
    public function home($params){

        
        // Envoie des pokémons dans la vue principale
        $pokemonModel = new Pokemon();
        $pokemons = $pokemonModel->findAll();

        $dataToSend['pokemons'] = $pokemons;

        $this-> show('home', $dataToSend);
    }

    /**
     * Permet de récuperer tous les types dans la vue des types
     *
     * @param [type] $params
     * @return void
     */
    public function types($params){

        // récuperation des types dans la page
        
        // on instancie le modèle Type
        $typeModel = new Type();
        $types = $typeModel->findAll();
        // Envoi des données à la vue
        $dataToSend['types'] = $types;
        
        $this-> show('types', $dataToSend);
    }

    /**
     * Fonction qui permet de trouver tous les pokémons appartenant à 1 type 
     *
     * @param [type] $params
     * @return void
     */
    public function type($params){

        
        $id = $params['id'];
        
        $pokemonModel = new Pokemon();
        $pokemonList = $pokemonModel->findAll();
        $pokemons = $pokemonModel->findByType($id);
        
        
        $dataToSend['pokemonList'] = $pokemonList;
        $dataToSend['pokemonsByType'] = $pokemons;
        
        
        
        $this-> show('type', $dataToSend);
    }
}