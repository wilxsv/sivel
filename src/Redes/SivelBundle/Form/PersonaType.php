<?php

namespace Redes\SivelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrePersona',  'text', array('label' => 'Nombre','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('duiPersona',  'text', array('label' => 'DUI','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('nitPersona',  'text', array('label' => 'NIT','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('nacimientoPersona', 'date')
            ->add('movilPersona','number', array('label' => 'Numero de telefono celular','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('telefonoPersona','number', array('label' => 'Numero de telefono casa','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('correoPersona', 'email', array('label' => 'Correo Electronico','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('sexoPersona', ChoiceType::class, array( 'choices'  => array('Sin especificar' => 3, 'Hombre' => 1, 'Mujer' => 0,), 'choices_as_values' => true,))
            ->add('ingresoPersona', 'date')
            ->add('latitudPersona', 'number', array('label' => 'Latitud','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('longitudPersona','number', array('label' => 'Longitud','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('direccionPersona', 'text', array('label' => 'Direccion','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('imagenPersona', FileType::class, array('label' => 'imagen para previsualizar', 'data_class' => null))
            ->add('observacionPersona',  'text', array('label' => 'Observaciones','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('idLocalidad', EntityType::class, array('label' => 'Seleccione la localidad', 'class' => 'RedesSivelBundle:Localidad','choice_label'=>'nombreLocalidad', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Redes\SivelBundle\Entity\Persona'
        ));
    }
}
