<?php 

namespace Kundentests\Types;

class ProductType extends AbstractType
{   
  
  /**
   * @var string
   */
  protected $name;

  /**
   * @var float
   */
  protected $price;

  /**
   * @var float
   */
  protected $setupFee;

  /**
   * @var int
   */
  protected $offlineReviewsPerMonth;

  /**
   * @var int
   */
  protected $reviewsPerMonth;

  /**
   * @var int
   */
  protected $integrationExistingReviews;

  /**
   * @var int
   */
  protected $visibleRatings;

  /**
   * @var int
   */
  protected $backlinks;

  /**
   * @var bool
   */
  protected $disabled;

  /**
   * @var bool
   */
  protected $upgradeable;

  /**
   * @param string $name
   * @return void
   */
  public function setName(string $name) : void
  {
    $this->name = $name;
  }

  /**
   * @return string
   */
  public function getName() : string
  {
    return $this->name;
  }

  /**
   * @param float $price
   * @return void
   */
  public function setPrice(float $price) : void
  {
    $this->price = $price;
  }

  /**
   * @return float
   */
  public function getPrice() : float
  {
    return $this->price;
  }

  /**
   * @param float $setupFee
   * @return void
   */
  public function setSetupFee(float $setupFee) : void
  {
    $this->setupFee = $setupFee;
  }

  /**
   * @return float
   */
  public function getSetupFee() : float
  {
    return $this->setupFee;
  }

  /**
   * @param int $offlineReviewsPerMonth
   * @return void
   */
  public function setOfflineReviewsPerMonth(int $offlineReviewsPerMonth) : void
  {
    $this->offlineReviewsPerMonth = $offlineReviewsPerMonth;
  }

  /**
   * @return int
   */
  public function getOfflineReviewsPerMonth() : int
  {
    return $this->offlineReviewsPerMonth;
  }

  /**
   * @param int $reviewsPerMonth
   * @return void
   */
  public function setReviewsPerMonth(int $reviewsPerMonth) : void
  {
    $this->reviewsPerMonth = $reviewsPerMonth;
  }

  /**
   * @return int
   */
  public function getReviewsPerMonth() : int
  {
    return $this->reviewsPerMonth;
  }

  /**
   * @param int $integrationExistingReviews
   * @return void
   */
  public function setIntegrationExistingReviews(int $integrationExistingReviews) : void
  {
    $this->integrationExistingReviews = $integrationExistingReviews;
  }

  /**
   * @return int
   */
  public function getIntegrationExistingReviews() : int
  {
    return $this->integrationExistingReviews;
  }

  /**
   * @param int $visibleRatings
   * @return void
   */
  public function setVisibleRatings(int $visibleRatings) : void
  {
    $this->visibleRatings = $visibleRatings;
  }

  /**
   * @return int
   */
  public function getVisibleRatings() : int
  {
    return $this->visibleRatings;
  }

  /**
   * @param int $backlinks
   * @return void
   */
  public function setBacklinks(int $backlinks) : void
  {
    $this->backlinks = $backlinks;
  }

  /**
   * @return int
   */
  public function getBacklinks() : int
  {
    return $this->backlinks;
  }

  /**
   * @param bool $disabled
   * @return void
   */
  public function setDisabled(bool $disabled) : void
  {
    $this->disabled = $disabled;
  }

  /**
   * @return bool
   */
  public function getDisabled() : bool
  {
    return $this->disabled;
  }

  /**
   * @param bool $upgradeable
   * @return void
   */
  public function setUpgradeable(bool $upgradeable) : void
  {
    $this->upgradeable = $upgradeable;
  }

  /**
   * @return bool
   */
  public function getUpgradeable() : bool
  {
    return $this->upgradeable;
  }

}
