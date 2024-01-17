<?php

namespace Model\Routes;

require_once ('Route.php');
use MainController;
use PokemonController;
class Pokemon extends Route{

    private int $idPokemon;
    private string $nomPokemon;

    private ?string $lienImg;
    private ?string $descriptionPkm;
    private string $type1;
    private ?string $type2;

    public function hydrate(array $donnees): void
    {
        foreach ($donnees as $key => $value) {
            $method = "set" . ucfirst($key);
            if(method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function getIdPokemon(): int
    {
        return $this->idPokemon;
    }

    public function setIdPokemon(int $idPokemon): void
    {
        $this->idPokemon = $idPokemon;
    }

    public function getNomPokemon(): string
    {
        return $this->nomPokemon;
    }

    public function setNomPokemon(string $nomPokemon): void
    {
        $this->nomPokemon = $nomPokemon;
    }

    public function getLienImg(): ?string
    {
        return $this->lienImg;
    }

    public function setLienImg(?string $lienImg): void
    {
        $this->lienImg = $lienImg;
    }

    public function getDescriptionPkm(): ?string
    {
        return $this->descriptionPkm;
    }

    public function setDescriptionPkm(?string $descriptionPkm): void
    {
        $this->descriptionPkm = $descriptionPkm;
    }

    public function getType1(): string
    {
        return $this->type1;
    }

    public function setType1(string $type1): void
    {
        $this->type1 = $type1;
    }

    public function getType2(): ?string
    {
        return $this->type2;
    }

    public function setType2(?string $type2): void
    {
        $this->type2 = $type2;
    }

    protected function post(array $params =[]):void
    {
        // TODO: Implement get() method.
    }

    protected function get(array $params = [])
    {
        // TODO: Implement get() method.
    }
}