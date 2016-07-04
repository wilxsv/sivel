<?php

namespace Redes\SivelBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CategoriaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreCategoria', 'text', array('label' => 'Nombre de Categoria','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('descripcionCategoria', 'text', array('label' => 'Descripcion','attr'=>  array('size' => '100%', 'class' => 'form-control')))
            ->add('idCategoria', EntityType::class, array('label' => 'Seleccione la Categoria', 'required'    => false, 'class' => 'RedesSivelBundle:Categoria','choice_label'=>'nombreCategoria', 'attr'=>  array('style' => 'width: 100%', 'class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Redes\SivelBundle\Entity\Categoria'
        ));
    }
}
