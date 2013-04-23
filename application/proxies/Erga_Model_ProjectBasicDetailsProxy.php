<?php

namespace DoctrineProxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Erga_Model_ProjectBasicDetailsProxy extends \Erga_Model_ProjectBasicDetails implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function get_basicdetailsid()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["_basicdetailsid"];
        }
        $this->__load();
        return parent::get_basicdetailsid();
    }

    public function set_basicdetailsid($_basicdetailsid)
    {
        $this->__load();
        return parent::set_basicdetailsid($_basicdetailsid);
    }

    public function get_project()
    {
        $this->__load();
        return parent::get_project();
    }

    public function set_project($_project)
    {
        $this->__load();
        return parent::set_project($_project);
    }

    public function get_category()
    {
        $this->__load();
        return parent::get_category();
    }

    public function set_category($_category)
    {
        $this->__load();
        return parent::set_category($_category);
    }

    public function get_mis()
    {
        $this->__load();
        return parent::get_mis();
    }

    public function set_mis($_mis)
    {
        $this->__load();
        return parent::set_mis($_mis);
    }

    public function get_acccode()
    {
        $this->__load();
        return parent::get_acccode();
    }

    public function set_acccode($_acccode)
    {
        $this->__load();
        return parent::set_acccode($_acccode);
    }

    public function get_department()
    {
        $this->__load();
        return parent::get_department();
    }

    public function set_department($_department)
    {
        $this->__load();
        return parent::set_department($_department);
    }

    public function get_refnumapproved()
    {
        $this->__load();
        return parent::get_refnumapproved();
    }

    public function set_refnumapproved($_refnumapproved)
    {
        $this->__load();
        return parent::set_refnumapproved($_refnumapproved);
    }

    public function get_refnumstart()
    {
        $this->__load();
        return parent::get_refnumstart();
    }

    public function set_refnumstart($_refnumstart)
    {
        $this->__load();
        return parent::set_refnumstart($_refnumstart);
    }

    public function get_modifications()
    {
        $this->__load();
        return parent::get_modifications();
    }

    public function set_modifications($_modifications)
    {
        $this->__load();
        return parent::set_modifications($_modifications);
    }

    public function get_shorttitle()
    {
        $this->__load();
        return parent::get_shorttitle();
    }

    public function set_shorttitle($_shorttitle)
    {
        $this->__load();
        return parent::set_shorttitle($_shorttitle);
    }

    public function get_title()
    {
        $this->__load();
        return parent::get_title();
    }

    public function get_titleCondensed()
    {
        $this->__load();
        return parent::get_titleCondensed();
    }

    public function set_title($_title)
    {
        $this->__load();
        return parent::set_title($_title);
    }

    public function get_titleen()
    {
        $this->__load();
        return parent::get_titleen();
    }

    public function set_titleen($_titleen)
    {
        $this->__load();
        return parent::set_titleen($_titleen);
    }

    public function get_supervisor()
    {
        $this->__load();
        return parent::get_supervisor();
    }

    public function set_supervisor($_supervisor)
    {
        $this->__load();
        return parent::set_supervisor($_supervisor);
    }

    public function get_previoussupervisors()
    {
        $this->__load();
        return parent::get_previoussupervisors();
    }

    public function set_previoussupervisors($_previoussupervisors)
    {
        $this->__load();
        return parent::set_previoussupervisors($_previoussupervisors);
    }

    public function get_committee()
    {
        $this->__load();
        return parent::get_committee();
    }

    public function set_committee($_committee)
    {
        $this->__load();
        return parent::set_committee($_committee);
    }

    public function get_description()
    {
        $this->__load();
        return parent::get_description();
    }

    public function set_description($_description)
    {
        $this->__load();
        return parent::set_description($_description);
    }

    public function get_startdate()
    {
        $this->__load();
        return parent::get_startdate();
    }

    public function set_startdate($_startdate)
    {
        $this->__load();
        return parent::set_startdate($_startdate);
    }

    public function get_enddate()
    {
        $this->__load();
        return parent::get_enddate();
    }

    public function set_enddate($_enddate)
    {
        $this->__load();
        return parent::set_enddate($_enddate);
    }

    public function get_comments()
    {
        $this->__load();
        return parent::get_comments();
    }

    public function set_comments($_comments)
    {
        $this->__load();
        return parent::set_comments($_comments);
    }

    public function get_iscomplex()
    {
        $this->__load();
        return parent::get_iscomplex();
    }

    public function get_isvirtual()
    {
        $this->__load();
        return parent::get_isvirtual();
    }

    public function set_isvirtual($_isvirtual)
    {
        $this->__load();
        return parent::set_isvirtual($_isvirtual);
    }

    public function get__duration()
    {
        $this->__load();
        return parent::get__duration();
    }

    public function setOwner($owner)
    {
        $this->__load();
        return parent::setOwner($owner);
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
        return array('__isInitialized__', '_basicdetailsid', '_project', '_category', '_mis', '_acccode', '_department', '_refnumapproved', '_refnumstart', '_modifications', '_shorttitle', '_title', '_titleen', '_supervisor', '_previoussupervisors', '_committee', '_description', '_startdate', '_enddate', '_comments');
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