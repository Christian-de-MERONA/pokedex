<?php

namespace Pokedex\Controllers;
use Symfony\Component\VarDumper\VarDumper;


use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class MainController {

    function show($page, $viewData = [])
    {
        // set global router variable
        global $router;

        // render viewData inputs as variables
        extract($viewData);

        // display requested page Views
        require __DIR__ . "/../views/header.tpl.php";
        require __DIR__ . "/../views/{$page}.tpl.php";
        require __DIR__ . "/../views/footer.tpl.php";

    }

    // show home page
    function home()
    {
        // instanciate pokemon class
        $pokemonModel = new Pokemon();

        // call findAll method to get list of all pokemons in DB
        $pokemonList = $pokemonModel->findAll();

        // populate $viewData with list of pokemons
        $viewData = [
            'pokemons' => $pokemonList
        ];

        // call show method with pokemon list
        $this->show("home", $viewData);
    }

    // show detail page
    function detail($params)
    {   
        // instanciate pokemon class
        $pokemonModel = new Pokemon();

        // call findAll method to get list of all pokemons in DB
        $pokemon = $pokemonModel->find($params["id"]);

        $typeModel = new Type();

        $typeList = $typeModel->findPokemonTypes($pokemon->getNumero());

        // populate $viewData with list of pokemons
        $viewData = [
            'pokemon' => $pokemon,
            'types' => $typeList
        ];

        // call show method with pokemon detail
        $this->show("detail", $viewData);
    }

    // show type page
    function type()
    {
        // instanciate pokemon class
        $typeModel = new Type();

        // call findAll method to get list of all pokemons in DB
        $typeList = $typeModel->findAll();

        // populate $viewData with list of pokemons
        $viewData = [
            'types' => $typeList
        ];
        $this->show("type", $viewData);
    }


    // show type page
    function pokemonOfType($params)
    {
        // instanciate pokemon class
        $pokemonModel = new Pokemon();

        // call findAll method to get list of all pokemons in DB
        $pokemonList = $pokemonModel->findPokemonOfType($params["id"]);

        // populate $viewData with list of pokemons
        $viewData = [
            'pokemons' => $pokemonList
        ];
        $this->show("pokemonOfType", $viewData);
    }

    // show 404 page
    function pageNotFound()
    {
        $this->show("pageNotFound");
    }

}