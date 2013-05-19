<?php

namespace Pweb\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\AccueilBundle\Entity\CategorieRepository")
 */
class Categorie
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
    private $libelleCat;


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
     * Set libelleCat
     *
     * @param string $libelleCat
     * @return Categorie
     */
    public function setLibelleCat($libelleCat)
    {
        $this->libelleCat = $libelleCat;
    
        return $this;
    }

    /**
     * Get libelleCat
     *
     * @return string 
     */
    public function getLibelleCat()
    {
        return $this->libelleCat;
    }
    
    public function __toString()
    {
      return $this->getLibelleCat();
    }
}