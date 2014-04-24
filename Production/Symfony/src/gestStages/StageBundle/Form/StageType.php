<?php

namespace gestStages\StageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebut', 'date', array('widget'=>'single_text', 
													'format'=>'dd/MM/yyyy',
													'attr'=>array('placeholder'=>"jj/mm/aaaa",
																	'max-length' => 10)
					))
            ->add('dateFin', 'date', array('widget'=>'single_text', 
													'format'=>'dd/MM/yyyy',
													'attr'=>array('placeholder'=>"jj/mm/aaaa",
																	'max-length' => 10)
					))
            ->add('missions')
            ->add('etudiant', 'entity', array(
                                        'class'    => 'gestStagesEtudiantBundle:Etudiant',
                                        'property' => 'nom'))
            ->add('entreprise', 'entity', array(
                                        'class'    => 'gestStagesStageBundle:Entreprise',
                                        'property' => 'raisonSociale'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'gestStages\StageBundle\Entity\Stage'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'geststages_stagebundle_stage';
    }
}
