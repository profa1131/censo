<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', 
                    array(
                        'label'=>'* Nombre',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Nombre del Rol'),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
                
                
            ->add('role', 'text', 
                    array(
                        'label'=>'* Rol',
                        'required'  => true, 
                        'attr' => array(
                            'class' => 'form-control',
                            'placeholder' => 'Rol'),
                        'label_attr' => array(
                            'class' => 'control-label')
                        
                        ))
                
                
            ->add('usuarios',null,array(
                        'label'=>'* Usuarios',
                        'label_attr' => array(
                            'class' => 'control-label'),
                        'required'  => true,                         
                        'attr' => array(
                            'class' => 'form-control')                                               
                        ))
            ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Groups'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'censo_censobundle_groups';
    }
}
