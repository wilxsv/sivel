<?php

namespace Redes\SivelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LocalidadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreLocalidad', 'text', array('label' => 'Nombre','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('latitudLocalidad', 'number', array('label' => 'Latitud','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('longitudLocalidad','number', array('label' => 'Longitud','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('idLocalidad', EntityType::class, array('label' => 'Seleccione la localidad superior', 'required'    => false, 'class' => 'RedesSivelBundle:Localidad','choice_label'=>'nombreLocalidad', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Redes\SivelBundle\Entity\Localidad'
        ));
    }
}
