<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdGroupOperation extends \Google\AdsApi\AdWords\v201601\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroup $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroup $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroup
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroup $operand
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}