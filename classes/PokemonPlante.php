<?php
class PokemonPlante extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): void {
        if ($adversaire instanceof PokemonEau) {
            $degats = 20; 
            $adversaire->recevoirDegats($degats);
        }
    }
}
?>
