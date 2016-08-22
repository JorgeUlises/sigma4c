<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MuestraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('responsable')
            ->add('producto')
            ->add('lugarToma')
            ->add('foto')
            ->add('nMuestras')
            ->add('fechaToma', 'date')
            ->add('fechaRecepcion', 'date')
            ->add('fechaAnalisis', 'date')
            ->add('tipoMuestreo')
            ->add('geometria')
            ->add('idFuenteHidrica')
            ->add('idParametro')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Muestra'
        ));
    }
}
