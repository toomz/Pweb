<?php

namespace Pweb\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\CompteBundle\Entity\CommandeRepository")
 */
class Commande
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\ManyToMany(targetEntity="Pweb\AccueilBundle\Entity\Produit", cascade={"persist"})
     */
    private $produits;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pweb\CompteBundle\Entity\StatutCom", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut;
    
    /* Constructeur pour initialiser la liste de produits
     * */
    public function __construct()
    {
        $this->produits = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set id
     *
     * @param integer $id
     * @return Commande
     */    
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Set produits
     *
     * @param \Pweb\AccueilBundle\Entity\Produit $produit
     * @return produits
     */
    public function addProduits(\Pweb\AccueilBundle\Entity\Produit $prod)
    {
        $this->produits[] = $prod;
    
        return $this;
    }

    /**
     * Get produits
     *
     * @return Pweb\AccueilBundle\Entity\Produits 
     */
    public function getProduits()
    {
        return $this->produits;
    }
    
    /**
     * Remove produits
     *
     * @param \Pweb\AccueilBundle\Entity\Produit $produit
     */
    public function removeProduits(\Pweb\AccueilBundle\Entity\Produit $prod)
    {
        $this->produits->removeElement($prod);
    }
    
    /**
     * Set Statut
     * 
     * @param \Pweb\CompteBundle\Entity\Statut $stat
     */
    public function setStatut(\Pweb\CompteBundle\Entity\StatutCom $stat)
    {
      $this->statut = $stat;
    } 

     /** 
       * Get Statut
       * 
       * @return \Pweb\CompteBundle\Entity\Statut
       */
     public function getStatut()
     {
       return $this->statut;
     }
     

    /**
     * Add produits
     *
     * @param \Pweb\AccueilBundle\Entity\Produit $produits
     * @return Commande
     */
    public function addProduit(\Pweb\AccueilBundle\Entity\Produit $produits)
    {
        $this->produits[] = $produits;
    
        return $this;
    }

    /**
     * Remove produits
     *
     * @param \Pweb\AccueilBundle\Entity\Produit $produits
     */
    public function removeProduit(\Pweb\AccueilBundle\Entity\Produit $produits)
    {
        $this->produits->removeElement($produits);
    }
}