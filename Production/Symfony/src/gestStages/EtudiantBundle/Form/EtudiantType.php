<?php

namespace gestStages\EtudiantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EtudiantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('nom', 'text')
            ->add('prenom', 'text')
            ->add('dateNaissance', 'date', array('widget'=>'single_text', 
													'format'=>'dd/MM/yyyy',
													'attr'=>array('placeholder'=>"jj/mm/aaaa",
																	'max-length' => 10)
									))
            ->add('rue', 'text')
            ->add('copos', 'text')
            ->add('ville', 'text')
            ->add('adressemail', 'email')
            ->add('telmobile', 'text')
            ->add('telfixe', 'text')
            ->add('login', 'text')
            ->add('mdp', 'text')
            ->add('specialite', 'text', array())
            ->add('redoublant')
            ->add('section', 'entity', array(
                                        'class'    => 'gestStagesEtudiantBundle:Section',
                                        'property' => 'code'))
            ->add('promo', 'entity', array(
                                        'class'    => 'gestStagesEtudiantBundle:Promo',
                                        'property' => 'libelle'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gestStages\EtudiantBundle\Entity\Etudiant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'geststages_etudiantbundle_etudiant';
    }
}
