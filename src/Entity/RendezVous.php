<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="rendez_vous", indexes={@ORM\Index(name="id_patient", columns={"id_patient"}), @ORM\Index(name="id_med", columns={"id_med"})})
 * @ORM\Entity
 */
class RendezVous
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rd", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rd", type="date", nullable=true)
     */
    private $dateRd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="heure_rd", type="integer", nullable=true)
     */
    private $heureRd;

    /**
     * @var int|null
     *
     * @ORM\Column(name="jour_restant", type="integer", nullable=true)
     */
    private $jourRestant;

    /**
     * @var \Patient
     *
     * @ORM\ManyToOne(targetEntity="Patient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_patient", referencedColumnName="id_patient")
     * })
     */
    private $idPatient;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_med", referencedColumnName="id_med")
     * })
     */
    private $idMed;

    public function getIdRd(): ?int
    {
        return $this->idRd;
    }

    public function getDateRd(): ?\DateTimeInterface
    {
        return $this->dateRd;
    }

    public function setDateRd(?\DateTimeInterface $dateRd): self
    {
        $this->dateRd = $dateRd;

        return $this;
    }

    public function getHeureRd(): ?int
    {
        return $this->heureRd;
    }

    public function setHeureRd(?int $heureRd): self
    {
        $this->heureRd = $heureRd;

        return $this;
    }

    public function getJourRestant(): ?int
    {
        return $this->jourRestant;
    }

    public function setJourRestant(?int $jourRestant): self
    {
        $this->jourRestant = $jourRestant;

        return $this;
    }

    public function getIdPatient(): ?Patient
    {
        return $this->idPatient;
    }

    public function setIdPatient(?Patient $idPatient): self
    {
        $this->idPatient = $idPatient;

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


}
