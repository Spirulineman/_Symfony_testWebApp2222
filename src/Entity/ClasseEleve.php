<?php

namespace App\Entity;

use App\Repository\ClasseEleveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasseEleveRepository::class)
 */
class ClasseEleve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(targetEntity=Eleve::class, inversedBy="classes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEleve(): ?int
    {
        return $this->id_eleve;
    }

    public function setIdEleve(int $id_eleve): self
    {
        $this->id_eleve = $id_eleve;

        return $this;
    }

    public function getClasse(): ?Eleve
    {
        return $this->classe;
    }

    public function setClasse(?Eleve $classe): self
    {
        $this->classe = $classe;

        return $this;
    }
}
