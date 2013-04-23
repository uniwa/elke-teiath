<?php

namespace DoctrineProxies\__CG__;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Erga_Model_ProjectFinancialDetails extends \Erga_Model_ProjectFinancialDetails implements \Doctrine\ORM\Proxy\Proxy
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

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function get_financialdetailsid()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["_financialdetailsid"];
        }
        $this->__load();
        return parent::get_financialdetailsid();
    }

    public function set_financialdetailsid($_financialdetailsid)
    {
        $this->__load();
        return parent::set_financialdetailsid($_financialdetailsid);
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

    public function get_fundingagencies()
    {
        $this->__load();
        return parent::get_fundingagencies();
    }

    public function set_fundingagencies($_fundingagencies)
    {
        $this->__load();
        return parent::set_fundingagencies($_fundingagencies);
    }

    public function get_fundingagenciesAsString()
    {
        $this->__load();
        return parent::get_fundingagenciesAsString();
    }

    public function get_fundingagenciesAsArray()
    {
        $this->__load();
        return parent::get_fundingagenciesAsArray();
    }

    public function get_sae()
    {
        $this->__load();
        return parent::get_sae();
    }

    public function set_sae($_sae)
    {
        $this->__load();
        return parent::set_sae($_sae);
    }

    public function get_nationalparticipation()
    {
        $this->__load();
        return parent::get_nationalparticipation();
    }

    public function set_nationalparticipation($_nationalparticipation)
    {
        $this->__load();
        return parent::set_nationalparticipation($_nationalparticipation);
    }

    public function get_europeanparticipation()
    {
        $this->__load();
        return parent::get_europeanparticipation();
    }

    public function set_europeanparticipation($_europeanparticipation)
    {
        $this->__load();
        return parent::set_europeanparticipation($_europeanparticipation);
    }

    public function get_fundingframework()
    {
        $this->__load();
        return parent::get_fundingframework();
    }

    public function set_fundingframework($_fundingframework)
    {
        $this->__load();
        return parent::set_fundingframework($_fundingframework);
    }

    public function get_opprogramme()
    {
        $this->__load();
        return parent::get_opprogramme();
    }

    public function set_opprogramme($_opprogramme)
    {
        $this->__load();
        return parent::set_opprogramme($_opprogramme);
    }

    public function get_axis()
    {
        $this->__load();
        return parent::get_axis();
    }

    public function set_axis($_axis)
    {
        $this->__load();
        return parent::set_axis($_axis);
    }

    public function get_fundingreceipts()
    {
        $this->__load();
        return parent::get_fundingreceipts();
    }

    public function set_fundingreceipts($_fundingreceipts)
    {
        $this->__load();
        return parent::set_fundingreceipts($_fundingreceipts);
    }

    public function get_budget()
    {
        $this->__load();
        return parent::get_budget();
    }

    public function set_budget($_budget)
    {
        $this->__load();
        return parent::set_budget($_budget);
    }

    public function get_budgetfpa()
    {
        $this->__load();
        return parent::get_budgetfpa();
    }

    public function set_budgetfpa($_budgetfpa)
    {
        $this->__load();
        return parent::set_budgetfpa($_budgetfpa);
    }

    public function get_budgetwithfpa()
    {
        $this->__load();
        return parent::get_budgetwithfpa();
    }

    public function get_bank()
    {
        $this->__load();
        return parent::get_bank();
    }

    public function set_bank($_bank)
    {
        $this->__load();
        return parent::set_bank($_bank);
    }

    public function get_iban()
    {
        $this->__load();
        return parent::get_iban();
    }

    public function set_iban($_iban)
    {
        $this->__load();
        return parent::set_iban($_iban);
    }

    public function get_financialenddate()
    {
        $this->__load();
        return parent::get_financialenddate();
    }

    public function set_financialenddate($_financialenddate)
    {
        $this->__load();
        return parent::set_financialenddate($_financialenddate);
    }

    public function get_budgetitems()
    {
        $this->__load();
        return parent::get_budgetitems();
    }

    public function set_budgetitems($_budgetitems)
    {
        $this->__load();
        return parent::set_budgetitems($_budgetitems);
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
        return array('__isInitialized__', '_financialdetailsid', '_sae', '_nationalparticipation', '_europeanparticipation', '_axis', '_budget', '_budgetfpa', '_iban', '_financialenddate', '_project', '_fundingagencies', '_fundingframework', '_opprogramme', '_fundingreceipts', '_bank', '_budgetitems');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}