<?php

namespace Proxies\__CG__\Censo\CensoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Habitantes extends \Censo\CensoBundle\Entity\Habitantes implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'id', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'nombre', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'segundoNombre', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'apellido', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'segundoApellido', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'genero', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'nacionalidad', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'cedula', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'empleo', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'fechaNacimiento', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'embarazo', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'parentesco', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'gradoDeInstruccion', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'cne', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'pensionado', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'tipoDeIngreso', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'ingresoMensual', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'jefeGrupoFamiliar', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'edoCivil', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'telefonoCelular', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'correoElectronico', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'telefonoOficina', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'tiempoEnLaComunidad', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'leyPoliticaHabitacional', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'participaOrganizacion', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'profaciones', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'areasDeTrabajos', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'vocerias', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'enfermedades', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'discapacidades', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'familias');
        }

        return array('__isInitialized__', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'id', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'nombre', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'segundoNombre', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'apellido', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'segundoApellido', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'genero', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'nacionalidad', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'cedula', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'empleo', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'fechaNacimiento', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'embarazo', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'parentesco', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'gradoDeInstruccion', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'cne', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'pensionado', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'tipoDeIngreso', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'ingresoMensual', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'jefeGrupoFamiliar', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'edoCivil', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'telefonoCelular', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'correoElectronico', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'telefonoOficina', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'tiempoEnLaComunidad', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'leyPoliticaHabitacional', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'participaOrganizacion', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'profaciones', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'areasDeTrabajos', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'vocerias', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'enfermedades', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'discapacidades', '' . "\0" . 'Censo\\CensoBundle\\Entity\\Habitantes' . "\0" . 'familias');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Habitantes $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoNombre($segundoNombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoNombre', array($segundoNombre));

        return parent::setSegundoNombre($segundoNombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoNombre', array());

        return parent::getSegundoNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellido($apellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellido', array($apellido));

        return parent::setApellido($apellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellido', array());

        return parent::getApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setSegundoApellido($segundoApellido)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSegundoApellido', array($segundoApellido));

        return parent::setSegundoApellido($segundoApellido);
    }

    /**
     * {@inheritDoc}
     */
    public function getSegundoApellido()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSegundoApellido', array());

        return parent::getSegundoApellido();
    }

    /**
     * {@inheritDoc}
     */
    public function setGenero($genero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGenero', array($genero));

        return parent::setGenero($genero);
    }

    /**
     * {@inheritDoc}
     */
    public function getGenero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGenero', array());

        return parent::getGenero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNacionalidad($nacionalidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNacionalidad', array($nacionalidad));

        return parent::setNacionalidad($nacionalidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getNacionalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNacionalidad', array());

        return parent::getNacionalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setCedula($cedula)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCedula', array($cedula));

        return parent::setCedula($cedula);
    }

    /**
     * {@inheritDoc}
     */
    public function getCedula()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCedula', array());

        return parent::getCedula();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmpleo($empleo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmpleo', array($empleo));

        return parent::setEmpleo($empleo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmpleo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmpleo', array());

        return parent::getEmpleo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaNacimiento($fechaNacimiento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaNacimiento', array($fechaNacimiento));

        return parent::setFechaNacimiento($fechaNacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaNacimiento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaNacimiento', array());

        return parent::getFechaNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmbarazo($embarazo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmbarazo', array($embarazo));

        return parent::setEmbarazo($embarazo);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmbarazo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmbarazo', array());

        return parent::getEmbarazo();
    }

    /**
     * {@inheritDoc}
     */
    public function setParentesco($parentesco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParentesco', array($parentesco));

        return parent::setParentesco($parentesco);
    }

    /**
     * {@inheritDoc}
     */
    public function getParentesco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParentesco', array());

        return parent::getParentesco();
    }

    /**
     * {@inheritDoc}
     */
    public function setGradoDeInstruccion($gradoDeInstruccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGradoDeInstruccion', array($gradoDeInstruccion));

        return parent::setGradoDeInstruccion($gradoDeInstruccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getGradoDeInstruccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGradoDeInstruccion', array());

        return parent::getGradoDeInstruccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCne($cne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCne', array($cne));

        return parent::setCne($cne);
    }

    /**
     * {@inheritDoc}
     */
    public function getCne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCne', array());

        return parent::getCne();
    }

    /**
     * {@inheritDoc}
     */
    public function setPensionado($pensionado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPensionado', array($pensionado));

        return parent::setPensionado($pensionado);
    }

    /**
     * {@inheritDoc}
     */
    public function getPensionado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPensionado', array());

        return parent::getPensionado();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipoDeIngreso($tipoDeIngreso)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipoDeIngreso', array($tipoDeIngreso));

        return parent::setTipoDeIngreso($tipoDeIngreso);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipoDeIngreso()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipoDeIngreso', array());

        return parent::getTipoDeIngreso();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngresoMensual($ingresoMensual)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngresoMensual', array($ingresoMensual));

        return parent::setIngresoMensual($ingresoMensual);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngresoMensual()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngresoMensual', array());

        return parent::getIngresoMensual();
    }

    /**
     * {@inheritDoc}
     */
    public function setJefeGrupoFamiliar($jefeGrupoFamiliar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJefeGrupoFamiliar', array($jefeGrupoFamiliar));

        return parent::setJefeGrupoFamiliar($jefeGrupoFamiliar);
    }

    /**
     * {@inheritDoc}
     */
    public function getJefeGrupoFamiliar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJefeGrupoFamiliar', array());

        return parent::getJefeGrupoFamiliar();
    }

    /**
     * {@inheritDoc}
     */
    public function setEdoCivil($edoCivil)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEdoCivil', array($edoCivil));

        return parent::setEdoCivil($edoCivil);
    }

    /**
     * {@inheritDoc}
     */
    public function getEdoCivil()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEdoCivil', array());

        return parent::getEdoCivil();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonoCelular($telefonoCelular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonoCelular', array($telefonoCelular));

        return parent::setTelefonoCelular($telefonoCelular);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonoCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonoCelular', array());

        return parent::getTelefonoCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setCorreoElectronico($correoElectronico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCorreoElectronico', array($correoElectronico));

        return parent::setCorreoElectronico($correoElectronico);
    }

    /**
     * {@inheritDoc}
     */
    public function getCorreoElectronico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCorreoElectronico', array());

        return parent::getCorreoElectronico();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefonoOficina($telefonoOficina)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefonoOficina', array($telefonoOficina));

        return parent::setTelefonoOficina($telefonoOficina);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefonoOficina()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefonoOficina', array());

        return parent::getTelefonoOficina();
    }

    /**
     * {@inheritDoc}
     */
    public function setTiempoEnLaComunidad($tiempoEnLaComunidad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTiempoEnLaComunidad', array($tiempoEnLaComunidad));

        return parent::setTiempoEnLaComunidad($tiempoEnLaComunidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getTiempoEnLaComunidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTiempoEnLaComunidad', array());

        return parent::getTiempoEnLaComunidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setLeyPoliticaHabitacional($leyPoliticaHabitacional)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLeyPoliticaHabitacional', array($leyPoliticaHabitacional));

        return parent::setLeyPoliticaHabitacional($leyPoliticaHabitacional);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeyPoliticaHabitacional()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeyPoliticaHabitacional', array());

        return parent::getLeyPoliticaHabitacional();
    }

    /**
     * {@inheritDoc}
     */
    public function setParticipaOrganizacion($participaOrganizacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParticipaOrganizacion', array($participaOrganizacion));

        return parent::setParticipaOrganizacion($participaOrganizacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipaOrganizacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipaOrganizacion', array());

        return parent::getParticipaOrganizacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfaciones(\Censo\CensoBundle\Entity\Profesiones $profaciones = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfaciones', array($profaciones));

        return parent::setProfaciones($profaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfaciones', array());

        return parent::getProfaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setAreasDeTrabajos(\Censo\CensoBundle\Entity\AreasDeTrabajos $areasDeTrabajos = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAreasDeTrabajos', array($areasDeTrabajos));

        return parent::setAreasDeTrabajos($areasDeTrabajos);
    }

    /**
     * {@inheritDoc}
     */
    public function getAreasDeTrabajos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAreasDeTrabajos', array());

        return parent::getAreasDeTrabajos();
    }

    /**
     * {@inheritDoc}
     */
    public function setVocerias(\Censo\CensoBundle\Entity\Vocerias $vocerias = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVocerias', array($vocerias));

        return parent::setVocerias($vocerias);
    }

    /**
     * {@inheritDoc}
     */
    public function getVocerias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVocerias', array());

        return parent::getVocerias();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnfermedade(\Censo\CensoBundle\Entity\Enfermedades $enfermedades)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnfermedade', array($enfermedades));

        return parent::addEnfermedade($enfermedades);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnfermedade(\Censo\CensoBundle\Entity\Enfermedades $enfermedades)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnfermedade', array($enfermedades));

        return parent::removeEnfermedade($enfermedades);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnfermedades()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnfermedades', array());

        return parent::getEnfermedades();
    }

    /**
     * {@inheritDoc}
     */
    public function addDiscapacidade(\Censo\CensoBundle\Entity\Discapacidades $discapacidades)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDiscapacidade', array($discapacidades));

        return parent::addDiscapacidade($discapacidades);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDiscapacidade(\Censo\CensoBundle\Entity\Discapacidades $discapacidades)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDiscapacidade', array($discapacidades));

        return parent::removeDiscapacidade($discapacidades);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscapacidades()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscapacidades', array());

        return parent::getDiscapacidades();
    }

    /**
     * {@inheritDoc}
     */
    public function setFamilias(\Censo\CensoBundle\Entity\Familias $familias = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFamilias', array($familias));

        return parent::setFamilias($familias);
    }

    /**
     * {@inheritDoc}
     */
    public function getFamilias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFamilias', array());

        return parent::getFamilias();
    }

}
