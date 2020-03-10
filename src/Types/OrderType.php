<?php 

namespace Kundentests\Types;

class OrderType extends AbstractType
{   
  /**
   * @var \Kundentests\Types\ProfileType
   */
  protected $profile;

  /**
   * @var \Kundentests\Types\ProductType
   */
  protected $product;

  /**
   * @var \Kundentests\Types\VoucherType
   */
  protected $voucher;

  /**
   * @var \DateTime
   */
  protected $orderDate;

  /**
   * @var \DateTime
   */
  protected $discountValidity;

  /**
   * @var \DateTime
   */
  protected $startDate;

  /**
   * @var \DateTime
   */
  protected $endDate;

  /**
   * @var bool
   */
  protected $canceled;

  /**
   * @param ProfileType $profile
   * @return void
   */
  public function setProfile(ProfileType $profile) : void
  {
    $this->profile = $profile;
  }

  /**
   * @return ProfileType
   */
  public function getProfile() : ProfileType
  {
    return $this->profile;
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
   * @param VoucherType $voucher
   * @return void
   */
  public function setVoucher(VoucherType $voucher) : void
  {
    $this->voucher = $voucher;
  }

  /**
   * @return VoucherType
   */
  public function getVoucher() : VoucherType
  {
    return $this->voucher;
  }

  /**
   * @param \DateTime $orderDate
   * @return void
   */
  public function setOrderDate(\DateTime $orderDate) : void
  {
    $this->orderDate = $orderDate;
  }

  /**
   * @return \DateTime
   */
  public function getOrderDate() : \DateTime
  {
    return $this->orderDate;
  }

  /**
   * @param \DateTime $discountValidity
   * @return void
   */
  public function setDiscountValidity(\DateTime $discountValidity) : void
  {
    $this->discountValidity = $discountValidity;
  }

  /**
   * @return \DateTime
   */
  public function getDiscountValidity() : \DateTime
  {
    return $this->discountValidity;
  }

  /**
   * @param \DateTime $startDate
   * @return void
   */
  public function setStartDate(\DateTime $startDate) : void
  {
    $this->startDate = $startDate;
  }

  /**
   * @return \DateTime
   */
  public function getStartDate() : \DateTime
  {
    return $this->startDate;
  }

  /**
   * @param \DateTime $endDate
   * @return void
   */
  public function setEndDate(\DateTime $endDate) : void
  {
    $this->endDate = $endDate;
  }

  /**
   * @return \DateTime
   */
  public function getEndDate() : \DateTime
  {
    return $this->endDate;
  }

  /**
   * @param bool $canceled
   * @return void
   */
  public function setCanceled(bool $canceled) : void
  {
    $this->canceled = $canceled;
  }

  /**
   * @return bool
   */
  public function getCanceled() : bool
  {
    return $this->canceled;
  }
  
}
