<?php

namespace SCRUM\SwiftairBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BookingType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('klanten', 'collection', array('type' => new KlantenType()))
            ->add('passagiers', 'collection', array('type' => new PassagiersType(), 'allow_add' => true))
            ->add('submit', 'submit', array(
                'attr' => array('class' => 'submit'),
                'label' => "Bevestig"
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SCRUM\SwiftairBundle\Entity\Booking'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrum_swiftairbundle_booking';
    }
}
