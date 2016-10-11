<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Targeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201608\GeoTargeting $geoTargeting
     */
    protected $geoTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\InventoryTargeting $inventoryTargeting
     */
    protected $inventoryTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\DayPartTargeting $dayPartTargeting
     */
    protected $dayPartTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\TechnologyTargeting $technologyTargeting
     */
    protected $technologyTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\CustomCriteriaSet $customTargeting
     */
    protected $customTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\UserDomainTargeting $userDomainTargeting
     */
    protected $userDomainTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\ContentTargeting $contentTargeting
     */
    protected $contentTargeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201608\VideoPositionTargeting $videoPositionTargeting
     */
    protected $videoPositionTargeting = null;

    /**
     * @param \Google\AdsApi\Dfp\v201608\GeoTargeting $geoTargeting
     * @param \Google\AdsApi\Dfp\v201608\InventoryTargeting $inventoryTargeting
     * @param \Google\AdsApi\Dfp\v201608\DayPartTargeting $dayPartTargeting
     * @param \Google\AdsApi\Dfp\v201608\TechnologyTargeting $technologyTargeting
     * @param \Google\AdsApi\Dfp\v201608\CustomCriteriaSet $customTargeting
     * @param \Google\AdsApi\Dfp\v201608\UserDomainTargeting $userDomainTargeting
     * @param \Google\AdsApi\Dfp\v201608\ContentTargeting $contentTargeting
     * @param \Google\AdsApi\Dfp\v201608\VideoPositionTargeting $videoPositionTargeting
     */
    public function __construct($geoTargeting = null, $inventoryTargeting = null, $dayPartTargeting = null, $technologyTargeting = null, $customTargeting = null, $userDomainTargeting = null, $contentTargeting = null, $videoPositionTargeting = null)
    {
      $this->geoTargeting = $geoTargeting;
      $this->inventoryTargeting = $inventoryTargeting;
      $this->dayPartTargeting = $dayPartTargeting;
      $this->technologyTargeting = $technologyTargeting;
      $this->customTargeting = $customTargeting;
      $this->userDomainTargeting = $userDomainTargeting;
      $this->contentTargeting = $contentTargeting;
      $this->videoPositionTargeting = $videoPositionTargeting;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\GeoTargeting
     */
    public function getGeoTargeting()
    {
      return $this->geoTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\GeoTargeting $geoTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setGeoTargeting($geoTargeting)
    {
      $this->geoTargeting = $geoTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\InventoryTargeting
     */
    public function getInventoryTargeting()
    {
      return $this->inventoryTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\InventoryTargeting $inventoryTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setInventoryTargeting($inventoryTargeting)
    {
      $this->inventoryTargeting = $inventoryTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\DayPartTargeting
     */
    public function getDayPartTargeting()
    {
      return $this->dayPartTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\DayPartTargeting $dayPartTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setDayPartTargeting($dayPartTargeting)
    {
      $this->dayPartTargeting = $dayPartTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\TechnologyTargeting
     */
    public function getTechnologyTargeting()
    {
      return $this->technologyTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\TechnologyTargeting $technologyTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setTechnologyTargeting($technologyTargeting)
    {
      $this->technologyTargeting = $technologyTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\CustomCriteriaSet
     */
    public function getCustomTargeting()
    {
      return $this->customTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\CustomCriteriaSet $customTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setCustomTargeting($customTargeting)
    {
      $this->customTargeting = $customTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\UserDomainTargeting
     */
    public function getUserDomainTargeting()
    {
      return $this->userDomainTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\UserDomainTargeting $userDomainTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setUserDomainTargeting($userDomainTargeting)
    {
      $this->userDomainTargeting = $userDomainTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\ContentTargeting
     */
    public function getContentTargeting()
    {
      return $this->contentTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\ContentTargeting $contentTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setContentTargeting($contentTargeting)
    {
      $this->contentTargeting = $contentTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\VideoPositionTargeting
     */
    public function getVideoPositionTargeting()
    {
      return $this->videoPositionTargeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\VideoPositionTargeting $videoPositionTargeting
     * @return \Google\AdsApi\Dfp\v201608\Targeting
     */
    public function setVideoPositionTargeting($videoPositionTargeting)
    {
      $this->videoPositionTargeting = $videoPositionTargeting;
      return $this;
    }

}