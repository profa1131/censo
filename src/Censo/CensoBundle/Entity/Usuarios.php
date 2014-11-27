<?php

namespace Censo\CensoBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_f780e5a4e7927c74", columns={"email"}), @ORM\UniqueConstraint(name="uniq_f780e5a4f85e0677", columns={"username"})})
 * @ORM\Entity(repositoryClass="Censo\CensoBundle\Entity\UsuariosRepository")
 */
class Usuarios implements AdvancedUserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\SequenceGenerator(sequenceName="usuarios_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=32, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="cedula", type="string", length=255, nullable=false)
     */
    private $cedula;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_empleado", type="string", length=255, nullable=false)
     */
    private $tipoEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=255, nullable=false)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=255, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="sede", type="string", length=255, nullable=false)
     */
    private $sede;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="date", nullable=false)
     */
    private $fechaIngreso;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_activacion", type="date", nullable=true)
     */
    private $fechaActivacion;
    

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groups", inversedBy="usuarios")
     * @ORM\JoinTable(name="usuarios_group",
     *   joinColumns={
     *     @ORM\JoinColumn(name="usuarios_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     *   }
     * )
     */
    private $group;
    
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=true)
     */
    private $fechaRegistro;
    
      /**
     * @var string
     *
     * @ORM\Column(name="telefono_oficina", type="string", length=255, nullable=true)
     */
    private $telefonoOficina;
    
      /**
     * @var string
     *
     * @ORM\Column(name="telefono_movil", type="string", length=255, nullable=true)
     */
    private $telefonoMovil;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->group = new ArrayCollection();
        
        $this->isActive = FALSE;
        $this->salt = md5(uniqid(null, true));
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Usuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Usuarios
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    

   

    

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Usuarios
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuarios
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set tipoEmpleado
     *
     * @param string $tipoEmpleado
     * @return Usuarios
     */
    public function setTipoEmpleado($tipoEmpleado)
    {
        $this->tipoEmpleado = $tipoEmpleado;

        return $this;
    }

    /**
     * Get tipoEmpleado
     *
     * @return string 
     */
    public function getTipoEmpleado()
    {
        return $this->tipoEmpleado;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Usuarios
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return Usuarios
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set sede
     *
     * @param string $sede
     * @return Usuarios
     */
    public function setSede($sede)
    {
        $this->sede = $sede;

        return $this;
    }

    /**
     * Get sede
     *
     * @return string 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Usuarios
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }
    
    /**
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     * @return Usuarios
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Add group
     *
     * @param \Ceso\CensoBundle\Entity\Groups $group
     * @return Usuarios
     */
    public function addGroup(\Censo\CensoBundle\Entity\Groups $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \Censo\CensoBundle\Entity\Groups $group
     */
    public function removeGroup(\Censo\CensoBundle\Entity\Groups $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function eraseCredentials() {
        
    }
    
    public function  equals(UserInterface $user) {
        return $this->id === $user->getId();    
    }
    
    
    public function getRoles() {
     return $this->group->toArray();   
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->isActive;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
        ));  
    }

    public function unserialize($serialized) {
          list (
            $this->id,
        ) = unserialize($serialized); 
    }
    
     public function __toString() {
        return $this->getUsername();
    }

    /**
     * Set telefonoOficina
     *
     * @param string $telefonoOficina
     * @return Usuarios
     */
    public function setTelefonoOficina($telefonoOficina)
    {
        $this->telefonoOficina = $telefonoOficina;

        return $this;
    }

    /**
     * Get telefonoOficina
     *
     * @return string 
     */
    public function getTelefonoOficina()
    {
        return $this->telefonoOficina;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     * @return Usuarios
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;

        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set fechaActivacion
     *
     * @param \DateTime $fechaActivacion
     * @return Usuarios
     */
    public function setFechaActivacion($fechaActivacion)
    {
        $this->fechaActivacion = $fechaActivacion;

        return $this;
    }

    /**
     * Get fechaActivacion
     *
     * @return \DateTime 
     */
    public function getFechaActivacion()
    {
        return $this->fechaActivacion;
    }

    /**
     * Add solicituds
     *
     * @param \Censo\CensoBundle\Entity\Solicitud $solicituds
     * @return Usuarios
     */
    public function addSolicitud(\Censo\CensoBundle\Entity\Solicitud $solicituds)
    {
        $this->solicituds[] = $solicituds;

        return $this;
    }

    /**
     * Remove solicituds
     *
     * @param \Censo\CensoBundle\Entity\Solicitud $solicituds
     */
    public function removeSolicitud(\Censo\CensoBundle\Entity\Solicitud $solicituds)
    {
        $this->solicituds->removeElement($solicituds);
    }

    /**
     * Get solicituds
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolicituds()
    {
        return $this->solicituds;
    }

    /**
     * Add solicitudes
     *
     * @param \Censo\SolicitudBundle\Solicitud $solicitudes
     * @return Usuarios
     */
    public function addSolicitude(\Censo\SolicitudBundle\Solicitud $solicitudes)
    {
        $this->solicitudes[] = $solicitudes;

        return $this;
    }

    /**
     * Remove solicitudes
     *
     * @param \Censo\SolicitudBundle\Solicitud $solicitudes
     */
    public function removeSolicitude(\Censo\SolicitudBundle\Solicitud $solicitudes)
    {
        $this->solicitudes->removeElement($solicitudes);
    }

    /**
     * Get solicitudes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSolicitudes()
    {
        return $this->solicitudes;
    }
}
