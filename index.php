<?php
require_once 'classes/Pokemon.php';
require_once 'classes/PokemonFeu.php';
require_once 'classes/PokemonEau.php';
require_once 'classes/PokemonPlante.php';
require_once 'classes/Combat.php';

$pokemon1 = new PokemonFeu("Salamèche", "Feu", 100, 30, 10);
$pokemon2 = new PokemonEau("Carapuce", "Eau", 100, 25, 12);
$pokemon3 = new PokemonPlante("Bulbizarre", "Plante", 100, 20, 15);
$pokemon4 = new PokemonFeu("Dracaufeu", "Feu", 120, 40, 20);
$pokemon5 = new PokemonEau("Tortank", "Eau", 110, 35, 18);
$pokemon6 = new PokemonPlante("Florizarre", "Plante", 130, 45, 25);
$pokemon7 = new PokemonFeu("Pyroli", "Feu", 105, 32, 14);
$pokemon8 = new PokemonEau("Aquali", "Eau", 108, 28, 16);
$pokemon9 = new PokemonPlante("Phyllali", "Plante", 115, 38, 22);
$pokemon10 = new PokemonFeu("Arcanin", "Feu", 125, 42, 24);
$pokemon11 = new PokemonFeu("Magmar", "Feu", 110, 35, 18);
$pokemon12 = new PokemonEau("Lokhlass", "Eau", 120, 30, 20);
$pokemon13 = new PokemonPlante("Rafflesia", "Plante", 105, 25, 15);
$pokemon14 = new PokemonFeu("Goupix", "Feu", 95, 28, 12);
$pokemon15 = new PokemonEau("Staross", "Eau", 115, 33, 17);
$pokemon16 = new PokemonPlante("Empiflor", "Plante", 110, 40, 22);
$pokemon17 = new PokemonFeu("Feunard", "Feu", 120, 38, 21);
$pokemon18 = new PokemonEau("Krabby", "Eau", 100, 27, 14);
$pokemon19 = new PokemonPlante("Saquedeneu", "Plante", 108, 32, 18);
$pokemon20 = new PokemonFeu("Héricendre", "Feu", 98, 29, 13);

$pokemons = [
    $pokemon1, $pokemon2, $pokemon3, $pokemon4, $pokemon5, 
    $pokemon6, $pokemon7, $pokemon8, $pokemon9, $pokemon10,
    $pokemon11, $pokemon12, $pokemon13, $pokemon14, $pokemon15,
    $pokemon16, $pokemon17, $pokemon18, $pokemon19, $pokemon20
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choixPokemon1 = $_POST['pokemon1'];
    $choixPokemon2 = $_POST['pokemon2'];

    $combat = new Combat($pokemons[$choixPokemon1], $pokemons[$choixPokemon2]);
    ?> 
    <div class="contain">
        <section class="result">
            
            <?php $combat->demarrerCombat(); ?> 
            <a href="index.php" class="cross"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-x"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg></a>
        </section>
    </div>
    
    <?php
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="container">
        <header>
            <h1>Pokemon Game PHP</h1>
        </header>
        
        <section class="pokemons">
            <h2>Pokémons Disponibles</h2>
            <div class="pokemon-cards">
                <?php foreach ($pokemons as $index => $pokemon): ?>
                    <div class="card">
                        <h3><?= $pokemon->getNom(); ?></h3>
                        <p>PV: <?= $pokemon->getPointsDeVie(); ?></p>
                        <p>Type: <?= $pokemon->getType(); ?></p>
                        <p>Puissance: <?= $pokemon->getPuissance(); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="combat-selection">
            <h2>Sélectionnez vos combattants</h2>
            <form method="POST">
                <div class="all-input">
                    <div class="input">
                        <label for="pokemon1">Votre Pokémon:</label>
                        <select name="pokemon1" id="pokemon1" required>
                            <?php foreach ($pokemons as $index => $pokemon): ?>
                                <option value="<?= $index; ?>"><?= $pokemon->getNom(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="input">
                        <label for="pokemon2">Son Adversaire:</label>
                        <select name="pokemon2" id="pokemon2" required>
                            <?php foreach ($pokemons as $index => $pokemon): ?>
                                <option value="<?= $index; ?>"><?= $pokemon->getNom(); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="btn">
                    <button type="submit">Combattre <img src="sword.png" alt=""></button>
                </div>
            </form>
        </section>

    </main>
</body>
</html>
