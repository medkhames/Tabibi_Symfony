<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandesFrournisseurs
 *
 * @ORM\Table(name="commandes_frournisseurs")
 * @ORM\Entity
 */
class CommandesFrournisseurs
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_commandeF", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommandef;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DescriptionF", type="string", length=255, nullable=true)
     */
    private $descriptionf;

    public function getIdCommandef(): ?int
    {
        return $this->idCommandef;
    }

    public function getDescriptionf(): ?string
    {
        return $this->descriptionf;
    }

    public function setDescriptionf(?string $descriptionf): self
    {
        $this->descriptionf = $descriptionf;

        return $this;
    }


}
