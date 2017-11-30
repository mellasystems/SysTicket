<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Ticket extends \AppBundle\Entity\Ticket implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaCreado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaEstado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaCierre', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'categoriaId', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'prioridad', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'usuarioSolicitanteId', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'usuarioAsignadoId');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaCreado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaEstado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'fechaCierre', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'descripcion', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'categoriaId', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'estado', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'prioridad', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'usuarioSolicitanteId', '' . "\0" . 'AppBundle\\Entity\\Ticket' . "\0" . 'usuarioAsignadoId');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Ticket $proxy) {
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
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreado($fechaCreado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreado', array($fechaCreado));

        return parent::setFechaCreado($fechaCreado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreado', array());

        return parent::getFechaCreado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaEstado($fechaEstado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaEstado', array($fechaEstado));

        return parent::setFechaEstado($fechaEstado);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaEstado', array());

        return parent::getFechaEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCierre($fechaCierre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCierre', array($fechaCierre));

        return parent::setFechaCierre($fechaCierre);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCierre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCierre', array());

        return parent::getFechaCierre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategoriaId($categoriaId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategoriaId', array($categoriaId));

        return parent::setCategoriaId($categoriaId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategoriaId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategoriaId', array());

        return parent::getCategoriaId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrioridad($prioridad)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrioridad', array($prioridad));

        return parent::setPrioridad($prioridad);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrioridad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrioridad', array());

        return parent::getPrioridad();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioSolicitanteId($usuarioSolicitanteId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioSolicitanteId', array($usuarioSolicitanteId));

        return parent::setUsuarioSolicitanteId($usuarioSolicitanteId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioSolicitanteId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioSolicitanteId', array());

        return parent::getUsuarioSolicitanteId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuarioAsignadoId($usuarioAsignadoId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuarioAsignadoId', array($usuarioAsignadoId));

        return parent::setUsuarioAsignadoId($usuarioAsignadoId);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuarioAsignadoId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuarioAsignadoId', array());

        return parent::getUsuarioAsignadoId();
    }

}
