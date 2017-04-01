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
            ->add('elementoAmbiental')
            ->add('fotos')
            ->add('fechaToma', 'datetime')
            ->add('fechaRecepcion', 'datetime')
            ->add('fechaAnalisis', 'datetime')
            ->add('tipoMuestreo')
            ->add('analisis')
            ->add('pdfLab')
            ->add('idPuntoControl')
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
