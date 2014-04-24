<?php

namespace gestStages\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\EtudiantBundle\Entity\EnseignantRepository")
 */
class Enseignant extends Internaute
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
     * @ORM\ManyToOne(targetEntity="gestStages\EtudiantBundle\Entity\Matiere", inversedBy="enseignants")
     * @ORM\JoinColumn(nullable=false)
     */
    private $matiere;   

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
     * Set matiere
     *
     * @param \gestStages\EtudiantBundle\Entity\Matiere $matiere
     * @return Enseignant
     */
    public function setMatiere(\gestStages\EtudiantBundle\Entity\Matiere $matiere)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \gestStages\EtudiantBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
}