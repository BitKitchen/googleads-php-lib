<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'CampaignFeed' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignFeed',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignFeedError',
      'CampaignFeedOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignFeedOperation',
      'CampaignFeedPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignFeedPage',
      'CampaignFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignFeedReturnValue',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CollectionSizeError',
      'ConstantOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConstantOperand',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityNotFound',
      'FeedAttributeOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedAttributeOperand',
      'Function' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MatchingFunction',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionError',
      'FunctionOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionOperand',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ListReturnValue',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'NullStatsPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullStatsPage',
      'FunctionArgumentOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FunctionArgumentOperand',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestContextOperand' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestContextOperand',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/CampaignFeedService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns a list of CampaignFeeds that meet the selector criteria.
     *
     * Campaign feeds are returned.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignFeedPage
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Adds, sets or removes CampaignFeeds.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignFeedReturnValue
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns a list of {@link CampaignFeed}s inside a {@link CampaignFeedPage} that matches
     * the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignFeedPage
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}