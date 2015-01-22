<?php

namespace SCRUM\SwiftairBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PassagiersType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('naam')
            ->add('voornaam')
            ->add('adres')
            ->add('rijksregister')
            ->add('geboortedatum')
            ->add('bagage', 'checkbox', array('required' => false))
            ->add('verzekering', 'checkbox', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SCRUM\SwiftairBundle\Entity\Passagiers'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrum_swiftairbundle_passagiers';
    }
}
