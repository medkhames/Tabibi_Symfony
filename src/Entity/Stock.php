<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stock
 *
 * @ORM\Table(name="stock")
 * @ORM\Entity
 */
class Stock
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_produit", type="string", length=255, nullable=true)
     */
    private $nomProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Quantite_produit", type="integer", nullable=true)
     */
    private $quantiteProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Image_produit", type="string", length=255, nullable=true)
     */
    private $imageProduit;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prix_produit", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixProduit;

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(?string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getQuantiteProduit(): ?int
    {
        return $this->quantiteProduit;
    }

    public function setQuantiteProduit(?int $quantiteProduit): self
    {
        $this->quantiteProduit = $quantiteProduit;

        return $this;
    }

    public function getImageProduit(): ?string
    {
        return $this->imageProduit;
    }

    public function setImageProduit(?string $imageProduit): self
    {
        $this->imageProduit = $imageProduit;

        return $this;
    }

    public function getPrixProduit(): ?float
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(?float $prixProduit): self
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }


}
