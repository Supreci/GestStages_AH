<?php

namespace gestStages\StageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Activite
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\StageBundle\Entity\ActiviteRepository")
 */
class Activite
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
    * @ORM\ManyToMany(targetEntity="gestStages\StageBundle\Entity\Entreprise", cascade={"persist"})
    */
    private $entreprises;

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
     * @return Activite
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
     * Add entreprises
     *
     * @param \gestStages\StageBundle\Entity\Entreprise $entreprises
     * @return Activite
     */
    public function addEntreprise(\gestStages\StageBundle\Entity\Entreprise $entreprises)
    {
        $this->entreprises[] = $entreprises;
    
        return $this;
    }

    /**
     * Remove entreprises
     *
     * @param \gestStages\StageBundle\Entity\Entreprise $entreprises
     */
    public function removeEntreprise(\gestStages\StageBundle\Entity\Entreprise $entreprises)
    {
        $this->entreprises->removeElement($entreprises);
    }

    /**
     * Get entreprises
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntreprises()
    {
        return $this->entreprises;
    }
}