<?php

namespace Proxies\__CG__\Webkul\UVDesk\CoreFrameworkBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Webkul\UVDesk\CoreFrameworkBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'proxyId', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'isEnabled', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'verificationCode', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'userInstance', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'grantedRoles', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'activeInstance', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'timezone', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'timeformat'];
        }

        return ['__isInitialized__', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'proxyId', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'firstName', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'lastName', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'isEnabled', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'verificationCode', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'userInstance', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'grantedRoles', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'activeInstance', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'timezone', '' . "\0" . 'Webkul\\UVDesk\\CoreFrameworkBundle\\Entity\\User' . "\0" . 'timeformat'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
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
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyId($proxyId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProxyId', [$proxyId]);

        return parent::setProxyId($proxyId);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProxyId', []);

        return parent::getProxyId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $grantedRoles = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$grantedRoles]);

        return parent::setRoles($grantedRoles);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsEnabled($isEnabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsEnabled', [$isEnabled]);

        return parent::setIsEnabled($isEnabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsEnabled', []);

        return parent::getIsEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setVerificationCode($verificationCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVerificationCode', [$verificationCode]);

        return parent::setVerificationCode($verificationCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getVerificationCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVerificationCode', []);

        return parent::getVerificationCode();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserInstance(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $userInstance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserInstance', [$userInstance]);

        return parent::addUserInstance($userInstance);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserInstance(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $userInstance)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserInstance', [$userInstance]);

        return parent::removeUserInstance($userInstance);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserInstance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserInstance', []);

        return parent::getUserInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function getAgentInstance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgentInstance', []);

        return parent::getAgentInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomerInstance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomerInstance', []);

        return parent::getCustomerInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentInstance(\Webkul\UVDesk\CoreFrameworkBundle\Entity\UserInstance $userInstance = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentInstance', [$userInstance]);

        return parent::setCurrentInstance($userInstance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentInstance()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentInstance', []);

        return parent::getCurrentInstance();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimezone($timezone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimezone', [$timezone]);

        return parent::setTimezone($timezone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimezone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimezone', []);

        return parent::getTimezone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeformat($timeformat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeformat', [$timeformat]);

        return parent::setTimeformat($timeformat);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeformat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeformat', []);

        return parent::getTimeformat();
    }

}
