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
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    protected $libelleProd;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    protected $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pweb\AccueilBundle\Entity\Categorie", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $categorie;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pweb\AccueilBundle\Entity\Marque", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    protected $marque;
  
    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    protected $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float")
     */
    protected $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="imageMin", type="string", length=255, nullable=TRUE)
     */
    protected $imageMin;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=TRUE)
     */
    protected $image;

    /**
     * @var \DateTime
     * 
     * @ORM\Column(name="dateSortie", type="datetime", nullable=TRUE)
     */
    protected $dateSortie;

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
    * @param string $url
    * @return Produit
    */
    public function setImage($url)
    {
      $this->image = $url;
      
      return $this;
    }

    /**
    * @return string
    */
    public function getImage()
    {
      return $this->image;
    }

    /**
    * @param string $url
    * @return Produit
    */
    public function setImageMin($url)
    {
      $this->imageMin = $url;
      
      return $this;
    }

    /**
    * @return string
    */
    public function getImageMin()
    {
      return $this->imageMin;
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

    /**
     * Set libelleProd
     *
     * @param string $libelleProd
     * @return Produit
     */
    public function setLibelleProd($libelleProd)
    {
        $this->libelleProd = $libelleProd;
    
        return $this;
    }

    /**
     * Get libelleProd
     *
     * @return string 
     */
    public function getLibelleProd()
    {
        return $this->libelleProd;
    }

    /**
     * Set dateSortie
     *
     * @param DateTime $date
     * @return Produit
     */
    public function setDateSortie($date)
    {
        $this->dateSortie = $date;
    
        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

}