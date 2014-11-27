<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('username', 'text', 
                    array(
                        'label'=>'* Usuario',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Nombre de Usuario'
                            ),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
                
                
            ->add('salt', 'hidden', 
                    array(
                        'label'=>'Basura',
                        'required'  => true, 
                        'attr' => array('class' => 'form-control','placeholder' => 'Basura'),
                        'label_attr' => array('class' => 'control-label')
                        
                        ))
                
                
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
                
                
            ->add('email','text', 
                    array(
                        'label'=>'* Correo Electrónico',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Correo'),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
                
                
            ->add('isActive', 'checkbox', 
                    array(
                        'required' => false,
                        'label'=>'Activo',                        
                        
                        ))
   
            ->add('nombre', 'text', 
                    array(
                        'label'=>'* Nombre(s)',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Indique el o los Nombre(s)'),
                        'label_attr' => array('class' => 'control-label')
                        
                        ))
                
                
            ->add('apellido', 'text', 
                    array(
                        'label'=>'* Apellido(s)',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Indique el o los Apellido(s)'),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
                
                
            ->add('cedula', 'integer', 
                    array(
                        'label'=>'* Cedula de Identidad',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Indique su Cédula de Identidad'),
                        'label_attr' => array(
                            'class' => 'control-label')
                        ))
  
            ->add('group',null,array(
                        'label'=>'* Roles',
                        'label_attr' => array(
                            'class' => 'control-label'
                            ),
                        
                        
                        'multiple' => true,
                        'expanded' => true,
                        'attr' => array('class' => ''),
                                                
                        ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Usuarios'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'censo_censobundle_usuarios';
    }
}
