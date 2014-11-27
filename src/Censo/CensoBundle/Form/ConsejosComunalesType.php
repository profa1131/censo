<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConsejosComunalesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text', array(
        'label' => '* Nombre',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Nombre'),
        ))
            ->add('direccion', 'textarea', array(
        'label' => '* Direccion',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Direccion'),
        ))
            ->add('codigo','text',array(
        'label' => '* Codigo',
        'required' => true,
        'max_length'=> 10,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Codigo'),
        ))
            ->add('rif','text',array(
        'label' => '* Rif',
        'required' => true,
        'max_length'=> 10,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Rif'),
        ))
            ->add('numeroCuenta', 'number', array(
        'label' => '* Numero de Cuenta',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Numero de Cuenta'),
        ))
            ->add('comuna', null, array(
        'label' => '* Comuna',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Comuna'),
        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\ConsejosComunales'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'censo_censobundle_consejoscomunales';
    }
}
