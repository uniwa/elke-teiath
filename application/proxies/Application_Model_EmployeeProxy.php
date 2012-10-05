<?php

namespace DoctrineProxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Application_Model_EmployeeProxy extends \Application_Model_Employee implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function get_afm()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["_afm"];
        }
        $this->__load();
        return parent::get_afm();
    }

    public function set_afm($_afm)
    {
        $this->__load();
        return parent::set_afm($_afm);
    }

    public function get_doy()
    {
        $this->__load();
        return parent::get_doy();
    }

    public function set_doy($_doy)
    {
        $this->__load();
        return parent::set_doy($_doy);
    }

    public function get_adt()
    {
        $this->__load();
        return parent::get_adt();
    }

    public function set_adt($_adt)
    {
        $this->__load();
        return parent::set_adt($_adt);
    }

    public function get_firstname()
    {
        $this->__load();
        return parent::get_firstname();
    }

    public function set_firstname($_firstname)
    {
        $this->__load();
        return parent::set_firstname($_firstname);
    }

    public function get_surname()
    {
        $this->__load();
        return parent::get_surname();
    }

    public function set_surname($_surname)
    {
        $this->__load();
        return parent::set_surname($_surname);
    }

    public function get_name()
    {
        $this->__load();
        return parent::get_name();
    }

    public function get_address()
    {
        $this->__load();
        return parent::get_address();
    }

    public function set_address($_address)
    {
        $this->__load();
        return parent::set_address($_address);
    }

    public function get_ldapusername()
    {
        $this->__load();
        return parent::get_ldapusername();
    }

    public function set_ldapusername($_ldapusername)
    {
        $this->__load();
        return parent::set_ldapusername($_ldapusername);
    }

    public function get_maxhours()
    {
        $this->__load();
        return parent::get_maxhours();
    }

    public function set_maxhours($_maxhours)
    {
        $this->__load();
        return parent::set_maxhours($_maxhours);
    }

    public function get_contracts()
    {
        $this->__load();
        return parent::get_contracts();
    }

    public function set_contracts($_contracts)
    {
        $this->__load();
        return parent::set_contracts($_contracts);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function __set($name, $value)
    {
        $this->__load();
        return parent::__set($name, $value);
    }

    public function __get($name)
    {
        $this->__load();
        return parent::__get($name);
    }

    public function get__classname()
    {
        $this->__load();
        return parent::get__classname();
    }

    public function set__classname($__classname)
    {
        $this->__load();
        return parent::set__classname($__classname);
    }

    public function setOptions(array $options, $ignoreisvisible = false)
    {
        $this->__load();
        return parent::setOptions($options, $ignoreisvisible);
    }

    public function getOptions($onlyDbFields = true, $poptions = array (
))
    {
        $this->__load();
        return parent::getOptions($onlyDbFields, $poptions);
    }

    public function toArray($onlyDbFields = true, $recursive = false, $options = array (
))
    {
        $this->__load();
        return parent::toArray($onlyDbFields, $recursive, $options);
    }

    public function save()
    {
        $this->__load();
        return parent::save();
    }

    public function remove()
    {
        $this->__load();
        return parent::remove();
    }

    public function getMetaOptions()
    {
        $this->__load();
        return parent::getMetaOptions();
    }

    public function getOptionsAsStrings($where = 'object', $dbfieldsonly = false, $curObject = NULL, &$variables = array (
), $visited = array (
))
    {
        $this->__load();
        return parent::getOptionsAsStrings($where, $dbfieldsonly, $curObject, $variables, $visited);
    }

    public function modifySubCollection($newcollection, &$oldcollection)
    {
        $this->__load();
        return parent::modifySubCollection($newcollection, $oldcollection);
    }


    public function __sleep()
    {
        return array('__isInitialized__', '_afm', '_doy', '_adt', '_firstname', '_surname', '_address', '_ldapusername', '_maxhours');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}