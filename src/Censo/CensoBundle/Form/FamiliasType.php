<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FamiliasType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('apellidos', 'text', array(
                    'label' => '* Apellidos',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Apellidos principales de la Familia'),
                ))
                ->add('telefonoLocal', 'text', array(
                    'label' => '* Telefono Local',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Numero Telefonico Local de la Vivienda'),
                ))
                ->add('telefonoMovil', 'text', array(
                    'label' => '* Telefono Movil',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Numero de Telefonico Movil'),
                ))
                ->add('sector', 'text', array(
                    'label' => '* Sector',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Sector de la Comunidad'),
                ))
                ->add('numeroCasa', 'text', array(
                    'label' => 'Numero de Casa',
                    'required' => false,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Numero de la Casa'),
                ))
                ->add('nombresComunidad', 'text', array(
                    'label' => '* Nombre de la Comunidad',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Nombre de la Comunidad'),
                ))
                ->add('usuarios', null, array(
                    'label' => '* Consejo Comunal',
                    'required' => 'true',
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Nombre del Consejo Comunal'),
                ))
                ->add('habitantes', 'collection', array(
                    'type' => new HabitantesType(),
                    'label' => 'Habitantes',
                    'by_reference' => false,
                    
                    'allow_delete' => true,
                    'allow_add' => true,
                    'attr' => array(
                        'class' => 'row habitantes'
        )))
            ->add('registroSocioeconomico', 'collection', array(
                    'type' => new RegistroSocioeconomicoType(),
                    'label' => '',
                    'by_reference' => false,
                    
                    'allow_delete' => true,
                    'allow_add' => true,
                    'attr' => array(
                        'class' => 'row RegistroSocioeconomico'
        )));
        
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Familias'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'censo_censobundle_familias';
    }

}
