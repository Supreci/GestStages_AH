<?php

namespace gestStages\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\StageBundle\Entity\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\Column(name="raisonSociale", type="string", length=40)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="numSiret", type="string", length=40)
     */
    private $numSiret;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=50)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=5)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20)
     */
    private $ville;

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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     * @return Entreprise
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
    
        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string 
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set numSiret
     *
     * @param string $numSiret
     * @return Entreprise
     */
    public function setNumSiret($numSiret)
    {
        $this->numSiret = $numSiret;
    
        return $this;
    }

    /**
     * Get numSiret
     *
     * @return string 
     */
    public function getNumSiret()
    {
        return $this->numSiret;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Entreprise
     */
    public function setRue($rue)
    {
        $this->rue = $rue;
    
        return $this;
    }

    /**
     * Get rue
     *
     * @return string 
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Entreprise
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Entreprise
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
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
     * @return Entreprise
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

    /**
     * Add activites
     *
     * @param \gestStages\StageBundle\Entity\Activite $activites
     * @return Entreprise
     */
    public function addActivite(\gestStages\StageBundle\Entity\Activite $activites)
    {
        $this->activites[] = $activites;
    
        return $this;
    }

    /**
     * Remove activites
     *
     * @param \gestStages\StageBundle\Entity\Activite $activites
     */
    public function removeActivite(\gestStages\StageBundle\Entity\Activite $activites)
    {
        $this->activites->removeElement($activites);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActivites()
    {
        return $this->activites;
    }
}