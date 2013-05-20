<?php

namespace Pweb\AccueilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marque
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Pweb\AccueilBundle\Entity\MarqueRepository")
 */
class Marque
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
    protected $libelleMar;


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
     * Set libelleMar
     *
     * @param string $libelleMar
     * @return Marque
     */
    public function setLibelleMar($libelleMar)
    {
        $this->libelleMar = $libelleMar;
    
        return $this;
    }

    /**
     * Get libelleMar
     *
     * @return string 
     */
    public function getLibelleMar()
    {
        return $this->libelleMar;
    }

    public function __toString()
    {
      return $this->getLibelleMar();
    }
}