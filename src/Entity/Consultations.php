<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Consultations
 *
 * @ORM\Table(name="consultations")
 * @ORM\Entity
 */
class Consultations
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_consultation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsultation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_patient", type="string", length=255, nullable=true)
     */
    private $nomPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prenom_patient", type="string", length=255, nullable=true)
     */
    private $prenomPatient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_patient", type="integer", nullable=true)
     */
    private $agePatient;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Diagnostic", type="string", length=255, nullable=true)
     */
    private $diagnostic;

    public function getIdConsultation(): ?int
    {
        return $this->idConsultation;
    }

    public function getNomPatient(): ?string
    {
        return $this->nomPatient;
    }

    public function setNomPatient(?string $nomPatient): self
    {
        $this->nomPatient = $nomPatient;

        return $this;
    }

    public function getPrenomPatient(): ?string
    {
        return $this->prenomPatient;
    }

    public function setPrenomPatient(?string $prenomPatient): self
    {
        $this->prenomPatient = $prenomPatient;

        return $this;
    }

    public function getAgePatient(): ?int
    {
        return $this->agePatient;
    }

    public function setAgePatient(?int $agePatient): self
    {
        $this->agePatient = $agePatient;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDiagnostic(): ?string
    {
        return $this->diagnostic;
    }

    public function setDiagnostic(?string $diagnostic): self
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }


}
