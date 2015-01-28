<?php

namespace SCRUM\SwiftairBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BestellingenType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('klanten', 'collection', array('type' => new KlantenType()))
            ->add('krediet', 'collection', array('required' => false, 'type' => new CardType()))
            ->add('passagiers', 'collection', array('label' => false, 'type' => new PassagiersType()))
            ->add('submit', 'submit', array(
                'attr' => array('class' => 'submit'),
                'label' => "Boek uw vlucht"
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SCRUM\SwiftairBundle\Entity\Bestellingen'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'scrum_swiftairbundle_bestellingen';
    }
}
