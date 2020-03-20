<?php 

namespace Kundentests\Types;

use Doctrine\Common\Collections\ArrayCollection;

class ProfileType extends AbstractType
{    
  /**
   * @var string
   */
  protected $name;
  
  /**
   * @var string
   */
  protected $headline;
  
  /**
   * @var string
   */
  protected $slogan;
  
  /**
   * @var string
   */
  protected $description;
  
  /**
   * @var string
   */
  protected $about;  
  
  /**
   * @var bool
   */
  protected $disabled;
  
  /**
   * @var bool
   */
  protected $rateable;  
  
  /**
   * @var bool
   */
  protected $partner;
  
  /**
   * @var int
   */
  protected $reviewsInThisMonth;
  
  /**
   * @var int
   */
  protected $agentursoftId;
  
  /**
   * @var \DateTime
   */
  protected $lastReviewsInThisMonthReset;  
  
  /**
   * @var \Kundentests\Types\UserType
   */
  protected $user;
  
  /**
   * @var \Kundentests\Types\ProductType
   */
  protected $product;

  /**
   * @var \Doctrine\Common\Collections\ArrayCollection<\Kundentests\Types\ServiceType>
   */
  protected $services;
  
  /**
   * @var \Doctrine\Common\Collections\ArrayCollection<\Kundentests\Types\VoteType>
   */
  protected $votes;

  /**
   * @var \Kundentests\Types\ResourceType
   */
  protected $logo;

  /**
   * @var \Kundentests\Types\ResourceType
   */
  protected $background;

  /**
   * @var \Kundentests\Types\BillingType
   */
  protected $billing;
  
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
   * @param string $headline
   * @return void
   */
  public function setHeadline(string $headline) : void
  {
    $this->headline = $headline;
  }
  
  /**
   * @return string
   */
  public function getHeadline() : string
  {
    return $this->headline;
  }
  
  /**
   * @param string $slogan
   * @return void
   */
  public function setSlogan(string $slogan) : void
  {
    $this->slogan = $slogan;
  }
  
  /**
   * @return string
   */
  public function getSlogan() : string
  {
    return $this->slogan;
  }
  
  /**
   * @param string $description
   * @return void
   */
  public function setDescription(string $description) : void
  {
    $this->description = $description;
  }
  
  /**
   * @return string
   */
  public function getDescription() : string
  {
    return $this->description;
  }
  
  /**
   * @param string $about
   * @return void
   */
  public function setAbout(string $about) : void
  {
    $this->about = $about;
  }
  
  /**
   * @return string
   */
  public function getAbout() : string
  {
    return $this->about;
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
   * @param bool $rateable
   * @return void
   */
  public function setRateable(bool $rateable) : void
  {
    $this->rateable = $rateable;
  }
  
  /**
   * @return bool
   */
  public function getRateable() : bool
  {
    return $this->rateable;
  }
  
  /**
   * @param bool $partner
   * @return void
   */
  public function setPartner(bool $partner) : void
  {
    $this->partner = $partner;
  }
  
  /**
   * @return bool
   */
  public function getPartner() : bool
  {
    return $this->partner;
  }
  
  /**
   * @param int $reviewsInThisMonth
   * @return void
   */
  public function setReviewsInThisMonth(int $reviewsInThisMonth) : void
  {
    $this->reviewsInThisMonth = $reviewsInThisMonth;
  }
  
  /**
   * @return int
   */
  public function getReviewsInThisMonth() : int
  {
    return $this->reviewsInThisMonth;
  }
  
  /**
   * @param int $agentursoftId
   * @return void
   */
  public function setAgentursoftId(int $agentursoftId) : void
  {
    $this->agentursoftId = $agentursoftId;
  }
  
  /**
   * @return int
   */
  public function getAgentursoftId() : int
  {
    return $this->agentursoftId;
  }
  
  /**
   * @param \DateTime $lastReviewsInThisMonthReset
   * @return void
   */
  public function setLastReviewsInThisMonthReset(\DateTime $lastReviewsInThisMonthReset) : void
  {
    $this->lastReviewsInThisMonthReset = $lastReviewsInThisMonthReset;
  }
  
  /**
   * @return \DateTime
   */
  public function getLastReviewsInThisMonthReset() : \DateTime
  {
    return $this->lastReviewsInThisMonthReset;
  }
  
  /**
   * @param UserType $user
   * @return void
   */
  public function setUser(UserType $user) : void
  {
    $this->user = $user;
  }
  
  /**
   * @return UserType
   */
  public function getUser() : UserType
  {
    return $this->user;
  }
  
  /**
   * @param ProductType $product
   * @return void
   */
  public function setProduct(ProductType $product) : void
  {
    $this->product = $product;
  }

  /**
   * @return ProductType
   */
  public function getProduct() : ProductType
  {
    return $this->product;
  }

  /**
   * @param ArrayCollection $services
   * @return void
   */
  public function setServices(ArrayCollection $services) : void
  {
    $this->services = $services;
  }

  /**
   * @return ArrayCollection
   */
  public function getServices() : ArrayCollection
  {
    return $this->services;
  }

  /**
   * @param ArrayCollection $votes
   * @return void
   */
  public function setVotes(ArrayCollection $votes) : void
  {
    $this->votes = $votes;
  }

  /**
   * @return ArrayCollection
   */
  public function getVotes() : ArrayCollection
  {
    return $this->votes;
  }

  /**
   * @param ResourceType $logo
   * @return void
   */
  public function setLogo(ResourceType $logo) : void
  {
    $this->logo = $logo;
  }

  /**
   * @return ResourceType
   */
  public function getLogo() : ResourceType
  {
    return $this->logo;
  }

  /**
   * @param ResourceType $background
   * @return void
   */
  public function setBackground(ResourceType $background) : void
  {
    $this->background = $background;
  }

  /**
   * @return ResourceType
   */
  public function getBackground() : ResourceType
  {
    return $this->background;
  }

  /**
   * @param BillingType $billing
   * @return void
   */
  public function setBilling(BillingType $billing) : void
  {
    $this->billing = $billing;
  }

  /**
   * @return BillingType
   */
  public function getBilling() : BillingType
  {
    return $this->billing;
  }

}
