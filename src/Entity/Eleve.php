<?php

namespace App\Entity;

use App\Repository\EleveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EleveRepository::class)
 */
class Eleve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_naissance;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $moyenne;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_classe;

    /**
     * @ORM\OneToMany(targetEntity=ClasseEleve::class, mappedBy="classe")
     */
    private $classes;

    public function __construct()
    {
        $this->classes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTimeInterface $date_naissance): self
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getMoyenne(): ?float
    {
        return $this->moyenne;
    }

    public function setMoyenne(?float $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function getIdClasse(): ?int
    {
        return $this->id_classe;
    }

    public function setIdClasse(int $id_classe): self
    {
        $this->id_classe = $id_classe;

        return $this;
    }

    /**
     * @return Collection|ClasseEleve[]
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(ClasseEleve $class): self
    {
        if (!$this->classes->contains($class)) {
            $this->classes[] = $class;
            $class->setClasse($this);
        }

        return $this;
    }

    public function removeClass(ClasseEleve $class): self
    {
        if ($this->classes->removeElement($class)) {
            // set the owning side to null (unless already changed)
            if ($class->getClasse() === $this) {
                $class->setClasse(null);
            }
        }

        return $this;
    }
}
