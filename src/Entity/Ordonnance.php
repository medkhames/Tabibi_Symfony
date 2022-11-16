<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordonnance
 *
 * @ORM\Table(name="ordonnance", indexes={@ORM\Index(name="id_med", columns={"id_med"}), @ORM\Index(name="id_produit", columns={"id_produit"})})
 * @ORM\Entity
 */
class Ordonnance
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_ordonnance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdonnance;

    /**
     * @var string
     *
     * @ORM\Column(name="DateAjout", type="string", length=255, nullable=false)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="Mode_utilisation", type="string", length=255, nullable=false)
     */
    private $modeUtilisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPrenomPatient", type="string", length=255, nullable=false)
     */
    private $nomprenompatient;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_prod")
     * })
     */
    private $idProduit;

    /**
     * @var \Medecin
     *
     * @ORM\ManyToOne(targetEntity="Medecin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_med", referencedColumnName="id_med")
     * })
     */
    private $idMed;

    public function getIdOrdonnance(): ?int
    {
        return $this->idOrdonnance;
    }

    public function getDateajout(): ?string
    {
        return $this->dateajout;
    }

    public function setDateajout(string $dateajout): self
    {
        $this->dateajout = $dateajout;

        return $this;
    }

    public function getModeUtilisation(): ?string
    {
        return $this->modeUtilisation;
    }

    public function setModeUtilisation(string $modeUtilisation): self
    {
        $this->modeUtilisation = $modeUtilisation;

        return $this;
    }

    public function getNomprenompatient(): ?string
    {
        return $this->nomprenompatient;
    }

    public function setNomprenompatient(string $nomprenompatient): self
    {
        $this->nomprenompatient = $nomprenompatient;

        return $this;
    }

    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }

    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;

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
