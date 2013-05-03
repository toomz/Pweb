<?php

namespace Pweb\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\AccueilBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pweb\AccueilBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $categorie;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pweb\AccueilBundle\Entity\Marque", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $marque;
  
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float")
     */
    private $poids;

    /**
     * @ORM\OneToOne(targetEntity="Pweb\AccueilBundle\Entity\Image", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $image;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    
        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Produit
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    
        return $this;
    }

    /**
     * Get poids
     *
     * @return float 
     */
    public function getPoids()
    {
        return $this->poids;
    }
    
    /**
    * @param \Pweb\AccueilBundle\Entity\Image $image
    */
    public function setImage(\Pweb\AccueilBundle\Entity\Image $image)
    {
      $this->image = $image;
    }

    /**
    * @return \Pweb\AccueilBundle\Entity\Image
    */
    public function getImage()
    {
      return $this->image;
    }
    
    /**
    * @param \Pweb\AccueilBundle\Entity\Categorie $categorie
    */
    public function setCategorie(\Pweb\AccueilBundle\Entity\Categorie $categorie)
    {
      $this->categorie = $categorie;
    }

    /**
    * @return \Pweb\AccueilBundle\Entity\Categorie
    */
    public function getCategorie()
    {
      return $this->categorie;
    }
    
    /**
    * @param \Pweb\AccueilBundle\Entity\Marque $marque
    */
    public function setMarque(\Pweb\AccueilBundle\Entity\Marque $marque)
    {
      $this->marque = $marque;
    }

    /**
    * @return \Pweb\AccueilBundle\Entity\Marque
    */
    public function getMarque()
    {
      return $this->marque;
    }
}