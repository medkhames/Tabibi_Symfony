<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin")
 * @ORM\Entity
 */
class Medecin
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_med", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mdp_med", type="string", length=255, nullable=true)
     */
    private $mdpMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_med", type="string", length=255, nullable=true)
     */
    private $emailMed;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_naissance_med", type="date", nullable=true)
     */
    private $dateNaissanceMed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="age_med", type="integer", nullable=true)
     */
    private $ageMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adresse_med", type="string", length=255, nullable=true)
     */
    private $adresseMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="genre_med", type="string", length=255, nullable=true)
     */
    private $genreMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_med", type="string", length=255, nullable=true)
     */
    private $nomMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom_med", type="string", length=255, nullable=true)
     */
    private $prenomMed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_tel_med", type="integer", nullable=true)
     */
    private $numTelMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo_med", type="string", length=255, nullable=true)
     */
    private $photoMed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo_dip", type="string", length=255, nullable=true)
     */
    private $photoDip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_rec_med", type="integer", nullable=true)
     */
    private $nbRecMed;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_patient", type="integer", nullable=true)
     */
    private $nbPatient;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_Blocked", type="boolean", nullable=true)
     */
    private $isBlocked;

    /**
     * @var string|null
     *
     * @ORM\Column(name="spéciatilte", type="string", length=255, nullable=true)
     */
    private $spéciatilte;

    public function getIdMed(): ?int
    {
        return $this->idMed;
    }

    public function getMdpMed(): ?string
    {
        return $this->mdpMed;
    }

    public function setMdpMed(?string $mdpMed): self
    {
        $this->mdpMed = $mdpMed;

        return $this;
    }

    public function getEmailMed(): ?string
    {
        return $this->emailMed;
    }

    public function setEmailMed(?string $emailMed): self
    {
        $this->emailMed = $emailMed;

        return $this;
    }

    public function getDateNaissanceMed(): ?\DateTimeInterface
    {
        return $this->dateNaissanceMed;
    }

    public function setDateNaissanceMed(?\DateTimeInterface $dateNaissanceMed): self
    {
        $this->dateNaissanceMed = $dateNaissanceMed;

        return $this;
    }

    public function getAgeMed(): ?int
    {
        return $this->ageMed;
    }

    public function setAgeMed(?int $ageMed): self
    {
        $this->ageMed = $ageMed;

        return $this;
    }

    public function getAdresseMed(): ?string
    {
        return $this->adresseMed;
    }

    public function setAdresseMed(?string $adresseMed): self
    {
        $this->adresseMed = $adresseMed;

        return $this;
    }

    public function getGenreMed(): ?string
    {
        return $this->genreMed;
    }

    public function setGenreMed(?string $genreMed): self
    {
        $this->genreMed = $genreMed;

        return $this;
    }

    public function getNomMed(): ?string
    {
        return $this->nomMed;
    }

    public function setNomMed(?string $nomMed): self
    {
        $this->nomMed = $nomMed;

        return $this;
    }

    public function getPrenomMed(): ?string
    {
        return $this->prenomMed;
    }

    public function setPrenomMed(?string $prenomMed): self
    {
        $this->prenomMed = $prenomMed;

        return $this;
    }

    public function getNumTelMed(): ?int
    {
        return $this->numTelMed;
    }

    public function setNumTelMed(?int $numTelMed): self
    {
        $this->numTelMed = $numTelMed;

        return $this;
    }

    public function getPhotoMed(): ?string
    {
        return $this->photoMed;
    }

    public function setPhotoMed(?string $photoMed): self
    {
        $this->photoMed = $photoMed;

        return $this;
    }

    public function getPhotoDip(): ?string
    {
        return $this->photoDip;
    }

    public function setPhotoDip(?string $photoDip): self
    {
        $this->photoDip = $photoDip;

        return $this;
    }

    public function getNbRecMed(): ?int
    {
        return $this->nbRecMed;
    }

    public function setNbRecMed(?int $nbRecMed): self
    {
        $this->nbRecMed = $nbRecMed;

        return $this;
    }

    public function getNbPatient(): ?int
    {
        return $this->nbPatient;
    }

    public function setNbPatient(?int $nbPatient): self
    {
        $this->nbPatient = $nbPatient;

        return $this;
    }

    public function isIsBlocked(): ?bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(?bool $isBlocked): self
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }

    public function getSpéciatilte(): ?string
    {
        return $this->spéciatilte;
    }

    public function setSpéciatilte(?string $spéciatilte): self
    {
        $this->spéciatilte = $spéciatilte;

        return $this;
    }


}
