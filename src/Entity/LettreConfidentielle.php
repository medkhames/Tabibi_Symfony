<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * LettreConfidentielle
 *
 * @ORM\Table(name="lettre_confidentielle", indexes={@ORM\Index(name="id_med", columns={"id_med"}), @ORM\Index(name="id_ordonnance", columns={"id_ordonnance"})})
 * @ORM\Entity
 */
class LettreConfidentielle
{
    /**
     * @var int
     *
     * @ORM\Column(name="IdConf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="signature", type="string", length=255, nullable=false)
     */
    private $signature;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_med", referencedColumnName="id_med")
     * })
     */
    private $idMed;

    /**
     * @var \Ordonnance
     *
     * @ORM\ManyToOne(targetEntity="Ordonnance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordonnance", referencedColumnName="Id_ordonnance")
     * })
     */
    private $idOrdonnance;

    public function getIdconf(): ?int
    {
        return $this->idconf;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getIdMed(): ?Medecin
    {
        return $this->idMed;
    }

    public function setIdMed(?Medecin $idMed): self
    {
        $this->idMed = $idMed;

        return $this;
    }

    public function getIdOrdonnance(): ?Ordonnance
    {
        return $this->idOrdonnance;
    }

    public function setIdOrdonnance(?Ordonnance $idOrdonnance): self
    {
        $this->idOrdonnance = $idOrdonnance;

        return $this;
    }


}
