<?php

namespace Proxies\__CG__\Webkul\UVDesk\CoreFrameworkBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class SupportTeam extends \Webkul\UVDesk\CoreFrameworkBundle\Entity\SupportTeam implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'id', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'name', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'description', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'createdAt', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'isActive', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'users', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'leads', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'supportGroups'];
        }

        return ['__isInitialized__', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'id', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'name', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'description', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'createdAt', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'isActive', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'users', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'leads', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\SupportTeam' . "\0" . 'supportGroups'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (SupportTeam $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsActive', []);

        return parent::getIsActive();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addLead(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLead', [$lead]);

        return parent::addLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLead(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLead', [$lead]);

        return parent::removeLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getLeads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeads', []);

        return parent::getLeads();
    }

    /**
     * {@inheritDoc}
     */
    public function addSupportGroup(\Webkul\UVDesk\CoreFrameworkBundle\Entity\SupportGroup $supportGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSupportGroup', [$supportGroup]);

        return parent::addSupportGroup($supportGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSupportGroup(\Webkul\UVDesk\CoreFrameworkBundle\Entity\SupportGroup $supportGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSupportGroup', [$supportGroup]);

        return parent::removeSupportGroup($supportGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupportGroups()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupportGroups', []);

        return parent::getSupportGroups();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeTimestamp', []);

        return parent::initializeTimestamp();
    }

}
