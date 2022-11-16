<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheSuivie
 *
 * @ORM\Table(name="fiche_suivie", indexes={@ORM\Index(name="Id_client_fiche", columns={"Id_client"}), @ORM\Index(name="Id_consultation_fiche", columns={"Id_consultattion"})})
 * @ORM\Entity
 */
class FicheSuivie
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_fiche", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFiche;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_client", type="integer", nullable=true)
     */
    private $idClient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Id_consultattion", type="integer", nullable=true)
     */
    private $idConsultattion;

    public function getIdFiche(): ?int
    {
        return $this->idFiche;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdConsultattion(): ?int
    {
        return $this->idConsultattion;
    }

    public function setIdConsultattion(?int $idConsultattion): self
    {
        $this->idConsultattion = $idConsultattion;

        return $this;
    }


}
