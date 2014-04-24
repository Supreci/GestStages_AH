<?php

namespace gestStages\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\EtudiantBundle\Entity\PromoRepository")
 */
class Promo
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
     * @ORM\Column(name="libelle", type="string", length=20)
     */
    private $libelle;

    /**
    * @ORM\OneToMany(targetEntity="gestStages\EtudiantBundle\Entity\Etudiant", mappedBy="etudiant")
    * @ORM\JoinColumn(nullable=false)
    */
    private $etudiants;


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
     * @return Promo
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
     * Constructor
     */
    public function __construct()
    {
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add etudiants
     *
     * @param \gestStages\EtudiantBundle\Entity\Etudiant $etudiants
     * @return Promo
     */
    public function addEtudiant(\gestStages\EtudiantBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \gestStages\EtudiantBundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\gestStages\EtudiantBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }
}