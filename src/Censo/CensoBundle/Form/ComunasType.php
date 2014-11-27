<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComunasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('parroquia', null, array(
        'label' => '* Parroquia',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Parroquia'),
        ))
        ->add('direccion', 'textarea', array(
        'label' => '* Direccion',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Direccion'),
        ))
        ->add('correo', 'email', array(
        'label' => '* Correo Electronico',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Correo Electronico'),
        ))
        ->add('telefono','number',array(
        'label' => '* Numero de Telefono',
        'required' => true,
        'max_length'=> 11,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Numero de Telefono'),
        ))
                
        ->add('nombre', 'text', array(
        'label' => '* Nombre',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Nombre de la Comuna'),
        ))
        ->add('rif','text',array(
        'label' => '* Rif',
        'required' => true,
        'max_length'=> 10,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Rif'),
        ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Comunas'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'censo_censobundle_comunas';
    }

}
