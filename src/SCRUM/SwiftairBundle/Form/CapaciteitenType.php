<?php

namespace SCRUM\SwiftairBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CapaciteitenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('capaciteit')
            ->add('vliegtuigid')
            ->add('klasseid')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SCRUM\SwiftairBundle\Entity\Capaciteiten'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrum_swiftairbundle_capaciteiten';
    }
}
