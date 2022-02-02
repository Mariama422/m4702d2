<?php

namespace App\Entity;

use App\Repository\AccesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccesRepository::class)
 */
class Acces
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=utilisateur::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $util;

    /**
     * @ORM\ManyToOne(targetEntity=Document::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $DOC;

    /**
     * @ORM\ManyToOne(targetEntity=Authorisation::class, inversedBy="acces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $otoriz;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtil(): ?utilisateur
    {
        return $this->util;
    }

    public function setUtil(?utilisateur $util): self
    {
        $this->util = $util;

        return $this;
    }

    public function getDOC(): ?Document
    {
        return $this->DOC;
    }

    public function setDOC(?Document $DOC): self
    {
        $this->DOC = $DOC;

        return $this;
    }

    public function getOtoriz(): ?Authorisation
    {
        return $this->otoriz;
    }

    public function setOtoriz(?Authorisation $otoriz): self
    {
        $this->otoriz = $otoriz;

        return $this;
    }
}
