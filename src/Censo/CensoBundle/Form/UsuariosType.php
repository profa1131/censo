<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
        ->add('username', 'text', array(
        'label' => '* Nombre de usuario',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Nombre de Usuarios',
        'onkeypress'=>'return soloLetras(event)'
        ), ))
//            ->add('salt')
                
        ->add('password', 'password', 
                    array(
                        'label'=>'* Clave',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Clave de acceso'
                            ),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
        
        ->add('email', 'email', array(
        'label' => '* Correo Electronico',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Correo Electronico',
        ), ))
//            ->add('isActive')
                ->add('nombre', 'text', array(
        'label' => '* Nombre de la Organizacion',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Nombre de la Organizacion',
        ), ))
                ->add('codigo', 'text', array(
        'label' => '* Codigo o Rif ',
        'required' => true,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Codigo o Rif de la Organizacion',
        ), ))
//            ->add('fechaActivacion')
//            ->add('fechaIngreso')
                ->add('telefono', 'text', array(
        'label' => ' Telefono Local ',
        'required' => false,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Numero Telefonico',
        ), ))
                ->add('telefonoMovil', 'text', array(
        'label' => ' Telefono Movil ',
        'required' => false,
        'attr' => array('class' => 'form-control',
        'placeholder' => 'Numero Celular',
        ), ))
                ->add('parroquia',  null, array(
                    'label' => '* Parroquias', 
                    'multiple'=> false,
                    'attr' => array('class' => 'form-control',
                )))
                ->add('group', null, array(
                    'label' => '* Roles', 
                    'multiple'=> false,
                    'attr' => array('class' => 'form-control',
                )));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'censo_censobundle_usuarios';
    }

}
