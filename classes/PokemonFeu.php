<?php
class PokemonFeu extends Pokemon {
    public function capaciteSpeciale(Pokemon $adversaire): void {
        if ($adversaire instanceof PokemonPlante) {
            $degats = 20; 
            $adversaire->recevoirDegats($degats);
        }
    }
}
?>
