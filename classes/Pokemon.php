<?php
abstract class Pokemon {
    protected string $nom;
    protected string $type;
    protected int $pointsDeVie;
    protected int $puissanceAttaque;
    protected int $defense;

    public function __construct(string $nom, string $type, int $pointsDeVie, int $puissanceAttaque, int $defense) {
        $this->nom = $nom;
        $this->type = $type;
        $this->pointsDeVie = $pointsDeVie;
        $this->puissanceAttaque = $puissanceAttaque;
        $this->defense = $defense;
    }

    abstract public function capaciteSpeciale(Pokemon $adversaire): void;

    public function attaquer(Pokemon $adversaire): void {
        $degats = max(0, $this->puissanceAttaque - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
    }

    public function getType() {
        return $this->type;
    }
    public function getPuissance(): int {
        return $this->puissanceAttaque;
    }

    public function recevoirDegats(int $degats): void {
        $this->pointsDeVie -= $degats;
    }

    public function estKO(): bool {
        return $this->pointsDeVie <= 0;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPointsDeVie(): int {
        return $this->pointsDeVie;
    }

    
}
?>
