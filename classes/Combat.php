<?php
class Combat {
    private Pokemon $pokemon1;
    private Pokemon $pokemon2;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function demarrerCombat(): void {
        while (!$this->pokemon1->estKO() && !$this->pokemon2->estKO()) {
            $this->tourDeCombat($this->pokemon1, $this->pokemon2);
            if (!$this->pokemon2->estKO()) {
                $this->tourDeCombat($this->pokemon2, $this->pokemon1);
            }
        }
        $this->determinerVainqueur();
    }
    public function tourDeCombat(Pokemon $attaquant, Pokemon $defenseur): void {
        $attaquant->attaquer($defenseur);
        echo "<p class='combat-log'>" . $attaquant->getNom() . " attaque " . $defenseur->getNom() . ". Points de vie de " . $defenseur->getNom() . " : <span class='bold'>" . $defenseur->getPointsDeVie() . "</span></p><br>";
    }

    public function determinerVainqueur(): void {
        if ($this->pokemon1->estKO()) {
            echo "<p class='combat-result'>" . $this->pokemon2->getNom() . " a gagné !</p>";
        } else {
            echo "<p class='combat-result'>" . $this->pokemon1->getNom() . " a gagné !</p>";
        }
    }
}
?>
