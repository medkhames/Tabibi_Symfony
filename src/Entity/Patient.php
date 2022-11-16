<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_patient", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_patient", type="string", length=255, nullable=true)
     */
    private $nomPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prénom_patient", type="string", length=255, nullable=true)
     */
    private $prénomPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_patient", type="string", length=255, nullable=true)
     */
    private $emailPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adress_patient", type="string", length=255, nullable=true)
     */
    private $adressPatient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumTel_patient", type="integer", nullable=true)
     */
    private $numtelPatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MotDePassel_patient", type="string", length=255, nullable=true)
     */
    private $motdepasselPatient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_patient", type="integer", nullable=true)
     */
    private $agePatient;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gendre_patient", type="string", length=255, nullable=true)
     */
    private $gendrePatient;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isblokedpatient", type="boolean", nullable=true)
     */
    private $isblokedpatient;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nb_Rdv", type="integer", nullable=true)
     */
    private $nbRdv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nb_Achat", type="integer", nullable=true)
     */
    private $nbAchat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nb_Reclamation", type="integer", nullable=true)
     */
    private $nbReclamation;

    public function getIdPatient(): ?int
    {
        return $this->idPatient;
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

    public function getPrénomPatient(): ?string
    {
        return $this->prénomPatient;
    }

    public function setPrénomPatient(?string $prénomPatient): self
    {
        $this->prénomPatient = $prénomPatient;

        return $this;
    }

    public function getEmailPatient(): ?string
    {
        return $this->emailPatient;
    }

    public function setEmailPatient(?string $emailPatient): self
    {
        $this->emailPatient = $emailPatient;

        return $this;
    }

    public function getAdressPatient(): ?string
    {
        return $this->adressPatient;
    }

    public function setAdressPatient(?string $adressPatient): self
    {
        $this->adressPatient = $adressPatient;

        return $this;
    }

    public function getNumtelPatient(): ?int
    {
        return $this->numtelPatient;
    }

    public function setNumtelPatient(?int $numtelPatient): self
    {
        $this->numtelPatient = $numtelPatient;

        return $this;
    }

    public function getMotdepasselPatient(): ?string
    {
        return $this->motdepasselPatient;
    }

    public function setMotdepasselPatient(?string $motdepasselPatient): self
    {
        $this->motdepasselPatient = $motdepasselPatient;

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

    public function getGendrePatient(): ?string
    {
        return $this->gendrePatient;
    }

    public function setGendrePatient(?string $gendrePatient): self
    {
        $this->gendrePatient = $gendrePatient;

        return $this;
    }

    public function isIsblokedpatient(): ?bool
    {
        return $this->isblokedpatient;
    }

    public function setIsblokedpatient(?bool $isblokedpatient): self
    {
        $this->isblokedpatient = $isblokedpatient;

        return $this;
    }

    public function getNbRdv(): ?int
    {
        return $this->nbRdv;
    }

    public function setNbRdv(?int $nbRdv): self
    {
        $this->nbRdv = $nbRdv;

        return $this;
    }

    public function getNbAchat(): ?int
    {
        return $this->nbAchat;
    }

    public function setNbAchat(?int $nbAchat): self
    {
        $this->nbAchat = $nbAchat;

        return $this;
    }

    public function getNbReclamation(): ?int
    {
        return $this->nbReclamation;
    }

    public function setNbReclamation(?int $nbReclamation): self
    {
        $this->nbReclamation = $nbReclamation;

        return $this;
    }


}
