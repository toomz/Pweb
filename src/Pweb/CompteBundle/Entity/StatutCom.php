<?php

namespace Pweb\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutCom
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\CompteBundle\Entity\StatutComRepository")
 */
class StatutCom
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
     * @ORM\Column(name="libelleStat", type="string", length=255)
     */
    private $libelleStat;


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
     * Set libelleStat
     *
     * @param string $libelleStat
     * @return StatutCom
     */
    public function setLibelleStat($libelleStat)
    {
        $this->libelleStat = $libelleStat;
    
        return $this;
    }

    /**
     * Get libelleStat
     *
     * @return string 
     */
    public function getLibelleStat()
    {
        return $this->libelleStat;
    }
}