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
     * @ORM\ManyToOne(targetEntity="Pweb\CompteBundle\Entity\StatutCom", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $statut;
    
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
     
}