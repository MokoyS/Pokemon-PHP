<?php
class Attaque {
    private string $nom;
    private int $puissance;
    private int $precision;

    public function __construct(string $nom, int $puissance, int $precision) {
        $this->nom = $nom;
        $this->puissance = $puissance;
        $this->precision = $precision;
    }

    public function executerAttaque(Pokemon $adversaire): void {
        if (rand(0, 100) <= $this->precision) {
            $adversaire->recevoirDegats($this->puissance);
        }
    }
}
?>
