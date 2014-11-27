<?php

namespace Censo\CensoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HabitantesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array(
                    'label' => '* Primer Nombre',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Primer Nombre'),
                ))
            ->add('segundoNombre', 'text', array(
                    'label' => '* Segundo Nombre',
                    'required' => false,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Segundo nombre'),
                ))
            ->add('apellido', 'text', array(
                    'label' => '* Primer Apellido',
                    'required' => false,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Primer Apellido'),
                ))
            ->add('segundoApellido', 'text', array(
                    'label' => '* Segundo Apellido',
                    'required' => false,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Segundo Apellido'),
                ))
            ->add('genero', 'choice', array(
                    'choices' => array(
                        'masculino' => 'Masculino',
                        'femenino' => 'Femanino'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('nacionalidad', 'choice', array(
                    'choices' => array(
                        'venezolano' => 'Venezolano',
                        'extranjero' => 'Extranjero'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('cedula', 'number', array(
                    'label' => '* Cedula',
                    'required' => true,
                    
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Cedula'),
                ))
            ->add('empleo', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('fechaNacimiento','birthday',array(
                    'label' => '* Fecha de nacimiento',
                    'required' => true,
                    
                ))
                
            ->add('embarazo', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('parentesco', 'choice', array(
                    'choices' => array(
                        'padre' => 'Padre',
                        'madre' => 'Madre',
                        'hijo' => 'Hijo(a)',
                        'abuela' => 'Abuelo(a)',
                        'otros' => 'Otros',
                    ),
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
                    'required' => true,
                 )))
            ->add('gradoDeInstruccion', 'choice', array(
                    'choices' => array(
                        'proimaria' => 'Primaria',
                        'secundaria' => 'Secundaria',
                        'bachiller' => 'Bachiller',
                        'tsu' => 'TSU',
                        'licenciado' => 'Licenciado',
                        'ingeniero' => 'Ingeniero',
                        'magister' => 'Magister',
                        'doctor' => 'Doctor',
                    ),
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
                    'required' => true,
                 )))
            ->add('cne', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO',
                        
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('pensionado', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('tipoDeIngreso', 'choice', array(
                    'choices' => array(
                        'diario' => 'Diario',
                        'semanal' => 'Semanal',
                        'quincenal' => 'Quincenal',
                        'mensual' => 'Mensual'),
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
                    'required' => true,
                 )))
            ->add('ingresoMensual','number', array(
                    'attr'=> array('class'=> 'form-control',
                    'required' => false,
                    'placeholder' => 'Ingrese en Bolivares el monto de sus ingresos Mensuales'
                 )))
            ->add('jefeGrupoFamiliar', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('edoCivil', 'choice', array(
                    'choices' => array(
                        'soltero' => 'Soltero',
                        'casado' => 'Casado',
                        'viudo' => 'Viudo',
                        'divorciado' => 'Divorciado'
                    ),
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
                    'required' => true,
                    
                )))
            ->add('telefonoCelular', 'text', array(
                    'label' => '* Numero Telefonico Celular',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => ' Numero Telefonico Celular'),
                ))
            ->add('correoElectronico', 'email', array(
                    'label' => '* Correo Electronico',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Correo Electronico'),
                ))
            ->add('telefonoOficina', 'text', array(
                    'label' => '* Numero Telefonico de oficina',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => ' Numero Telefonico de Oficina'),
                ))
            ->add('tiempoEnLaComunidad', 'text', array(
                    'label' => '* Tiempo Viviendo en la Comunidad',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => ' Tiempo Viviendo en la Comunidad '),
                ))
            ->add('leyPoliticaHabitacional', 'choice', array(
                    'choices' => array(
                        'si' => 'SI',
                        'no' => 'NO'
                    ),
                    'required' => true,
                    'expanded' => true
                ))
            ->add('participaOrganizacion', 'text', array(
                    'label' => '* Participa en una Organizacion?',
                    'required' => true,
                    'attr' => array('class' => 'form-control',
                        'placeholder' => 'Participa en una Organizacion?'),
                ))
            ->add('profaciones', null, array(
                'label'=>'* Profesiones',               
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
            )))
            ->add('areasDeTrabajos', null, array(
                'label'=>'* Area de Tabajo',               
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
            )))
            ->add('vocerias', null, array(
                'label'=>'* Vocerias',               
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
            )))
            ->add('enfermedades', null, array(
                'label'=>'* Enfermedades',
                'expanded'=> true,
                'multiple'=> true,
                ))
            ->add('discapacidades',null, array(
                'label'=>'Discapacidades',               
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
            )))
                ->add('familias',null, array(
                'label'=>'Familias',               
                'empty_value'=> '-Seleccione-',
                'attr'=> array('class'=> 'form-control',
            )));
        
    }
   
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Censo\CensoBundle\Entity\Habitantes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'censo_censobundle_habitantes';
    }
}
