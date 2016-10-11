<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExtensionSettingReturnValue extends \Google\AdsApi\AdWords\v201607\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\CustomerExtensionSetting[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201607\cm\CustomerExtensionSetting[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\CustomerExtensionSetting[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\CustomerExtensionSetting[] $value
     * @return \Google\AdsApi\AdWords\v201607\cm\CustomerExtensionSettingReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}