<?php 

namespace Kundentests\Types;

class VoucherType extends AbstractType
{   
  /**
   * @var string
   */
  protected $code;

  /**
   * @var int
   */
  protected $discountType;

  /**
   * @var string
   */
  protected $discountTypeSign;

  /**
   * @var float
   */
  protected $value;

  /**
   * @var int
   */
  protected $runningTime;

  /**
   * @param string $code
   * @return void
   */
  public function setCode(string $code) : void
  {
    $this->code = $code;
  }

  /**
   * @return string
   */
  public function getCode() : string
  {
    return $this->code;
  }

  /**
   * @param int $discountType
   * @return void
   */
  public function setDiscountType(int $discountType) : void
  {
    $this->discountType = $discountType;
  }

  /**
   * @return int
   */
  public function getDiscountType() : int
  {
    return $this->discountType;
  }

  /**
   * @param string $discountTypeSign
   * @return void
   */
  public function setDiscountTypeSign(string $discountTypeSign) : void
  {
    $this->discountTypeSign = $discountTypeSign;
  }

  /**
   * @return string
   */
  public function getDiscountTypeSign() : string
  {
    return $this->discountTypeSign;
  }

  /**
   * @param float $value
   * @return void
   */
  public function setValue(float $value) : void
  {
    $this->value = $value;
  }

  /**
   * @return float
   */
  public function getValue() : float
  {
    return $this->value;
  }

  /**
   * @param int $runningTime
   * @return void
   */
  public function setRunningTime(int $runningTime) : void
  {
    $this->runningTime = $runningTime;
  }

  /**
   * @return int
   */
  public function getRunningTime() : int
  {
    return $this->runningTime;
  }

}
