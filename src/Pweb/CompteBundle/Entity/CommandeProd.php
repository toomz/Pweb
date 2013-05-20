<?php

namespace Pweb\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeProd
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\CompteBundle\Entity\CommandeProdRepository")
 */
class CommandeProd
{

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Pweb\AccueilBundle\Entity\Produit", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $produit;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Pweb\CompteBundle\Entity\Commande", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $commande;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return CommandeProd
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set produit
     *
     * @param \Pweb\AccueilBundle\Entity\Produit $produit
     * @return CommandeProd
     */
    public function setProduit(\Pweb\AccueilBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;
    
        return $this;
    }

    /**
     * Get produit
     *
     * @return \Pweb\AccueilBundle\Entity\Produit 
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * Set commande
     *
     * @param \Pweb\CompteBundle\Entity\Commande $commande
     * @return CommandeProd
     */
    public function setCommande(\Pweb\CompteBundle\Entity\Commande $commande)
    {
        $this->commande = $commande;
    
        return $this;
    }

    /**
     * Get commande
     *
     * @return \Pweb\CompteBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

}