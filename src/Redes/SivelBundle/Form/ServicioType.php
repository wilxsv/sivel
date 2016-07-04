<?php

namespace Redes\SivelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;


class ServicioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreServicio', 'text', array('label' => 'Nombre','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('descripcionServicio', 'text', array('label' => 'descripcion','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('precioServicio', MoneyType::class, array('label' => 'Precio ', 'currency' => 'USD','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('vistoServicio', 'number', array('label' => 'Veces consultado','attr'=>  array('size' => '100%', 'class' => 'form-control', 'disable' => true)))
            ->add('img0Servicio', FileType::class, array('label' => 'imagen', 'data_class' => null))
            ->add('img1Servicio', FileType::class, array('label' => 'Imagen para galeria', 'data_class' => null))
            ->add('img2Servicio', FileType::class, array('label' => 'Otra imagen más para la galeria', 'data_class' => null))
            ->add('idCategoria', EntityType::class, array('label' => 'Seleccione la Categoria', 'required' => true, 'class' => 'RedesSivelBundle:Categoria','choice_label'=>'nombreCategoria', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
            ->add('idFinanciamiento', EntityType::class, array('label' => 'Seleccione el Financiamiento', 'required' => true, 'class' => 'RedesSivelBundle:Financiamiento','choice_label'=>'nombreFinanciamiento', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
            ->add('idPersona', EntityType::class, array('label' => 'Seleccione la persona responsable', 'required' => true, 'class' => 'RedesSivelBundle:Persona','choice_label'=>'nombrePersona', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Redes\SivelBundle\Entity\Servicio'
        ));
    }
}
