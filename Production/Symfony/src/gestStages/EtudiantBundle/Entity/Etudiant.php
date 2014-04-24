<?php

namespace gestStages\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\EtudiantBundle\Entity\EtudiantRepository")
 */
class Etudiant extends Internaute
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
     * @ORM\Column(name="Specialite", type="string", length=40)
     */
    private $specialite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="redoublant", type="boolean")
     */
    private $redoublant;
	
	/**
     * @ORM\ManyToOne(targetEntity="gestStages\EtudiantBundle\Entity\Section",inversedBy="etudiants")
     * @ORM\JoinColumn(nullable=false)
     */
	private $section;	

    /**
     * @ORM\ManyToOne(targetEntity="gestStages\EtudiantBundle\Entity\Promo",inversedBy="etudiants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $promo;   

    /**
    * @ORM\OneToMany(targetEntity="gestStages\StageBundle\Entity\Stage", mappedBy="stage")
    * @ORM\JoinColumn(nullable=false)
    */
    private $stages;

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
     * Set specialite
     *
     * @param string $specialite
     * @return Etudiant
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    
        return $this;
    }

    /**
     * Get specialite
     *
     * @return string 
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set redoublant
     *
     * @param boolean $redoublant
     * @return Etudiant
     */
    public function setRedoublant($redoublant)
    {
        $this->redoublant = $redoublant;
    
        return $this;
    }

    /**
     * Get redoublant
     *
     * @return boolean 
     */
    public function getRedoublant()
    {
        return $this->redoublant;
    }

    /**
     * Set section
     *
     * @param \gestStages\EtudiantBundle\Entity\Section $section
     * @return Etudiant
     */
    public function setSection(\gestStages\EtudiantBundle\Entity\Section $section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return \gestStages\EtudiantBundle\Entity\Section 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set promo
     *
     * @param \gestStages\EtudiantBundle\Entity\Promo $promo
     * @return Etudiant
     */
    public function setPromo(\gestStages\EtudiantBundle\Entity\Promo $promo)
    {
        $this->promo = $promo;
    
        return $this;
    }

    /**
     * Get promo
     *
     * @return \gestStages\EtudiantBundle\Entity\Promo 
     */
    public function getPromo()
    {
        return $this->promo;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->stages = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add stages
     *
     * @param \gestStages\StageBundle\Entity\Stage $stages
     * @return Etudiant
     */
    public function addStage(\gestStages\StageBundle\Entity\Stage $stages)
    {
        $this->stages[] = $stages;
    
        return $this;
    }

    /**
     * Remove stages
     *
     * @param \gestStages\StageBundle\Entity\Stage $stages
     */
    public function removeStage(\gestStages\StageBundle\Entity\Stage $stages)
    {
        $this->stages->removeElement($stages);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStages()
    {
        return $this->stages;
    }
}