<?php

namespace gestStages\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\StageBundle\Entity\StageRepository")
 */
class Stage
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
     * @ORM\Column(name="DateDebut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var text
     *
     * @ORM\Column(name="Missions", type="text")
     */
    private $missions;

    /**
     * @ORM\ManyToOne(targetEntity="gestStages\EtudiantBundle\Entity\Etudiant",inversedBy="stages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $etudiant;   

    /**
     * @ORM\ManyToOne(targetEntity="gestStages\StageBundle\Entity\Entreprise",inversedBy="stages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $entreprise;   

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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Stage
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Stage
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set missions
     *
     * @param string $missions
     * @return Stage
     */
    public function setMissions($missions)
    {
        $this->missions = $missions;
    
        return $this;
    }

    /**
     * Get missions
     *
     * @return string 
     */
    public function getMissions()
    {
        return $this->missions;
    }

    /**
     * Set etudiant
     *
     * @param \gestStages\EtudiantBundle\Entity\Etudiant $etudiant
     * @return Stage
     */
    public function setEtudiant(\gestStages\EtudiantBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;
    
        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \gestStages\EtudiantBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set entreprise
     *
     * @param \gestStages\StageBundle\Entity\Entreprise $entreprise
     * @return Stage
     */
    public function setEntreprise(\gestStages\StageBundle\Entity\Entreprise $entreprise)
    {
        $this->entreprise = $entreprise;
    
        return $this;
    }

    /**
     * Get entreprise
     *
     * @return \gestStages\StageBundle\Entity\Entreprise 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
}