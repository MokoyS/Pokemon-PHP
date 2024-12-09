<?php
class PokemonEau extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): void {
        if ($adversaire instanceof PokemonFeu) {
            $degats = 20;
            $adversaire->recevoirDegats($degats);
        }
    }
}
?>
