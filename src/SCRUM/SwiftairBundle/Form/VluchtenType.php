<?php

namespace SCRUM\SwiftairBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VluchtenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('vertrekdatum')
            ->add('aankomstdatum')
            ->add('vliegtuigid')
            ->add('vertrekhavenid')
            ->add('aankomsthavenid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SCRUM\SwiftairBundle\Entity\Vluchten'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrum_swiftairbundle_vluchten';
    }
}
