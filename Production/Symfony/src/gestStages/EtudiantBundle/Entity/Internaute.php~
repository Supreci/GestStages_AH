<?php

namespace gestStages\EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Internaute
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="gestStages\EtudiantBundle\Entity\InternauteRepository")
 *
 *
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"enseignant" = "Enseignant", "etudiant" = "Etudiant"})
 */
class Internaute
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
     * @ORM\Column(name="matricule", type="string", length=15)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=25)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="rue", type="string", length=30)
     */
    private $rue;

    /**
     * @var string
     *
     * @ORM\Column(name="copos", type="string", length=6)
     */
    private $copos;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=25)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adressemail", type="string", length=50)
     */
    private $adressemail;

    /**
     * @var string
     *
     * @ORM\Column(name="telmobile", type="string", length=10)
     */
    private $telmobile;

    /**
     * @var string
     *
     * @ORM\Column(name="telfixe", type="string", length=10)
     */
    private $telfixe;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=30)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp", type="string", length=30)
     */
    private $mdp;


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
     * Set matricule
     *
     * @param string $matricule
     * @return Internaute
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    
        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Internaute
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Internaute
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Internaute
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    
        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set rue
     *
     * @param string $rue
     * @return Internaute
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
     * Set copos
     *
     * @param string $copos
     * @return Internaute
     */
    public function setCopos($copos)
    {
        $this->copos = $copos;
    
        return $this;
    }

    /**
     * Get copos
     *
     * @return string 
     */
    public function getCopos()
    {
        return $this->copos;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Internaute
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
     * Set adressemail
     *
     * @param string $adressemail
     * @return Internaute
     */
    public function setAdressemail($adressemail)
    {
        $this->adressemail = $adressemail;
    
        return $this;
    }

    /**
     * Get adressemail
     *
     * @return string 
     */
    public function getAdressemail()
    {
        return $this->adressemail;
    }

    /**
     * Set telmobile
     *
     * @param string $telmobile
     * @return Internaute
     */
    public function setTelmobile($telmobile)
    {
        $this->telmobile = $telmobile;
    
        return $this;
    }

    /**
     * Get telmobile
     *
     * @return string 
     */
    public function getTelmobile()
    {
        return $this->telmobile;
    }

    /**
     * Set telfixe
     *
     * @param string $telfixe
     * @return Internaute
     */
    public function setTelfixe($telfixe)
    {
        $this->telfixe = $telfixe;
    
        return $this;
    }

    /**
     * Get telfixe
     *
     * @return string 
     */
    public function getTelfixe()
    {
        return $this->telfixe;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Internaute
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Internaute
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    
        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }
}